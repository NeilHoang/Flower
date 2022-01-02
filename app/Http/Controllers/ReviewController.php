<?php

namespace App\Http\Controllers;

use App\Http\Services\Review\ReviewService;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected $reviewService;
    protected $product;
    protected $user;

    public function __construct(ReviewService $reviewService,Product $product,User $user)
    {
        $this->reviewService = $reviewService;
        $this->product = $product;
        $this->user = $user;
    }

    public function index()
    {
        $reviews = $this->reviewService->getAll();
        $products = $this->product->all();
        $users = $this->user->all();
        return view('admin.reviews.index',compact('reviews','products','users'));
    }

    public function store(Request $request)
    {
        $this->reviewService->store($request);
        return redirect()->route('review.index');
    }

    public function findById($id)
    {
        return $this->reviewService->findById($id);
    }

    public function update(Request $request, $id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->update($request,$review);
        return redirect()->route('review.index');
    }

    public function destroy($id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->destroy($review);
        return redirect()->route('review.index');
    }
}
