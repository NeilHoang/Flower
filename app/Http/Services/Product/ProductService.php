<?php


namespace App\Http\Services\Product;


use App\Http\Repositories\Product\ProductRepoInterface;
use App\Http\Repositories\Review\ReviewRepository;
use App\Http\Services\Review\ReviewService;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;

class ProductService implements ProductServiceInterface
{
    protected $productRepo;
    protected $reviewRepo;

    public function __construct(ProductRepoInterface $productRepo, ReviewRepository $reviewRepo)
    {
        $this->productRepo = $productRepo;
        $this->reviewRepo = $reviewRepo;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }

    public function store($request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->size_id = $request->size;
        $product->form_id = $request->form;
        $product->description = $request->description;
        $productThemesId = $request->theme;
        $productTypesId = $request->type;

        if (!$request->hasFile('image')) {
            $product->image = $request->image;
        } else {
            $image = $request->image;
            $imageName = date('Y-m-d H:i:s') . $image->getClientOriginalName();
            $request->image->storeAs('public/images/products', $imageName);
            $product->image = $imageName;
        }
        $this->productRepo->store($product);
        $product->themes()->attach($productThemesId);
        $product->types()->attach($productTypesId);

    }

    public function findById($id)
    {
        return $this->productRepo->findById($id);

    }

    public function update($request, $id)
    {
        $product = $this->productRepo->findById($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->size_id = $request->size;
        $product->form_id = $request->form;
        $product->description = $request->description;
        $product->themes()->detach();
        $product->types()->detach();
        $productThemesId = $request->theme;
        $productTypesId = $request->type;

        if ($request->hasFile('image')) {
            $currentImage = $product->image;
            if ($currentImage) {
                Storage::delete('public/images/products/' . $currentImage);
            }
            $image = $request->image;
            $imageName = date('Y-m-d H:i:s') . $image->getClientOriginalName();
            $request->image->storeAs('public/images/products', $imageName);
            $product->image = $imageName;
        }
        $product->themes()->attach($productThemesId);
        $product->types()->attach($productTypesId);
        $this->productRepo->store($product);
    }

    public function destroy($id)
    {
        $product = $this->productRepo->findById($id);

        $currentImage = $product->image;
        if ($currentImage) {
            Storage::delete('public/images/products/' . $currentImage);
        }
        $product->themes()->detach();
        $product->types()->detach();
        $this->productRepo->destroy($product);
    }

    public function search($request)
    {
        $key = $request->key;
        return $this->productRepo->search($key);
    }


    public function paginating()
    {
        return $this->productRepo->paginating();
    }

    public function getEightProduct()
    {
        return $this->productRepo->getEightProduct();
    }

    public function findProductBySizeId($id)
    {
        return $this->productRepo->findProductBySizeId($id);
    }

    public function findProductByFormId($id)
    {
        return $this->productRepo->findProductByFormId($id);
    }

    public function findProductByThemeId($id)
    {
        return $this->productRepo->findProductByThemeId($id);
    }

    public function findProductByTypeId($id)
    {
        return $this->productRepo->findProductByTypeId($id);
    }
    public static function getStar($id)
    {
            $product = Product::findOrFail($id);
            $reviews = $product->reviews;
            $starResult=0;
            $avgStar=0;
            foreach ($reviews as $review){
                $starResult += $review->star;
            }
            if (count($reviews)!=0){
                $avgStar = $starResult/count($reviews);
            }
        return $avgStar;
    }
}
