<?php

namespace App\Http\Controllers;

use App\Http\Services\Product\ProductService;
use App\Http\Services\Review\ReviewService;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class DetailsPorductController extends Controller
{
    protected $reviewService;
    protected $productService;

    public function __construct(ReviewService $reviewService, ProductService $productService)
    {
        $this->reviewService = $reviewService;
        $this->productService = $productService;
    }

    public function index($id)
    {
        $product = $this->productService->findById($id);
        $reviews = $this->reviewService->getByProduct($id);
        $avgStar = ProductService::getStar($id);
        $cart = Session::get('cart');
        return view('shop.details', compact('product', 'reviews', 'avgStar', 'cart'));
    }

    public function store(Request $request)
    {
        $this->reviewService->store($request);
        return back();
    }

    public function findById($id)
    {
        return $this->productService->findById($id);
    }

    public function update(Request $request, $id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->update($request, $review);
        return redirect()->route('shop.details');
    }

    public function destroy($id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->destroy($review);
        return redirect()->route('shop.details');
    }
}
