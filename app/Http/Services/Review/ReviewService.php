<?php


namespace App\Http\Services\Review;


use App\Http\Repositories\Review\ReviewRepository;
use App\Models\Review;

class ReviewService implements ReviewServiceInterface
{
    protected $reviewRepo;

    public function __construct(ReviewRepository $reviewRepo)
    {
        $this->reviewRepo = $reviewRepo;

    }

    public function getAll()
    {
        return $this->reviewRepo->getAll();
    }

    public function store($request)
    {
        $oldReview = ReviewRepository::searchByUserAndProduct($request->user, $request->product);
        if ($oldReview){
            $oldReview->review = $request->review;
            $oldReview->star = $request->star;
            $this->reviewRepo->store($oldReview);
        }
        else{
            $review = new review();
            $review->review = $request->review;
            $review->star = $request->star;
            $review->product_id = $request->product;
            $review->user_id = $request->user;
            $this->reviewRepo->store($review);
        }

    }

    public function findById($id)
    {
        return $this->reviewRepo->findById($id);
    }

    public function update($request, $obj)
    {
        ;
        $obj->review = $request->review;
        $obj->star = $request->star;
        $this->reviewRepo->update($obj);
    }

    public function getByProduct($product_id)
    {
        return $this->reviewRepo->getByProduct($product_id);
    }

    public function destroy($obj)
    {
        $this->reviewRepo->destroy($obj);
    }

    public function search($request)
    {
        return $this->reviewRepo->search($request->key);
    }
}
