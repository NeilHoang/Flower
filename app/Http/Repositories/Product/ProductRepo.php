<?php


namespace App\Http\Repositories\Product;


use App\Models\Color;
use App\Models\Product;
use App\Models\Theme;
use App\Models\Type;

class ProductRepo implements ProductRepoInterface
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll()
    {
        return $this->product->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        return $this->product->findOrFail($id);
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete();
    }

    public function search($key)
    {
        return $this->product->where('name','LIKE','%'.$key.'%')->paginate(5);
    }

    public function paginating()
    {
        return $this->product->paginate(12);
    }

    public function getEightProduct()
    {
        return Product::orderBy('id', 'desc')->take(4)->get();
    }

    public function findProductBySizeId($id)
    {
        return Product::where('size_id','LIKE',$id)->paginate(6);
    }

    public function findProductByFormId($id)
    {
        return Product::where('form_id','LIKE',$id)->paginate(6);

    }

    public function findProductByThemeId($id)
    {
        return  Theme::find($id)->products()->paginate(6);

    }

    public function findProductByTypeId($id)
    {
        return  Type::find($id)->products()->paginate(6);

    }


}
