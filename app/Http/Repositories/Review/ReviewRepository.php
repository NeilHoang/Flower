<?php


namespace App\Http\Repositories\Review;


use App\Http\Repositories\Request;
use App\Models\Review;

class ReviewRepository implements ReviewRepositoryInterface
{
    protected $review;

    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    public function getByProduct($id)
    {
        return Review::where('product_id', 'like', $id)->paginate(4);
    }

    public function getAll()
    {
        return $this->review->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete();
    }

    public static function searchByUserAndProduct($user_id, $product_id)
    {
        return Review::where('user_id','like',$user_id)->where('product_id','like',$product_id)->first();
    }

    public function search($key)
    {
        return $this->review->where('review', 'like', '%' . $key . '%')->get();
    }

    public function findById($id)
    {
        return $this->review->findOrFail($id);

    }
}
