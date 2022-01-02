<?php


namespace App\Http\Services\Comment;


use App\Models\Comment;
use App\Http\Repositories\Comment\CommentRepoInterface;
use Illuminate\Support\Facades\Auth;

class CommentService implements CommentServiceInterface
{
    protected $commentRepo;

    public function __construct(CommentRepoInterface $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

    public function getAll()
    {
        return $this->commentRepo->getAll();
    }

    public function store($request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = Auth::id();
        $comment->post_id = $request->post_id;
        $this->commentRepo->store($comment);
    }

    public function findById($id)
    {
        return $this->commentRepo->findById($id);
    }

    public function update($request, $id)
    {
        $comment = $this->commentRepo->findById($id);
        $comment->comment = $request->comment;
        $this->commentRepo->update($comment);
    }

    public function destroy($id)
    {
        $comment = $this->commentRepo->findById($id);
        $this->commentRepo->destroy($comment);
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }


    public function findByPostId($id)
    {
        return $this->commentRepo->findByPostId($id);
    }

    public function findByPostIdUseAJAX($id)
    {
        $comments =  $this->commentRepo->findByPostId($id);
        $arr = [];
        foreach ($comments as $comment){
            $obj = new \stdClass();
            $obj->comment = $comment->comment;
            $obj->name = $comment->user->name;
            array_push($arr,$obj);
        }
        return $arr;
    }
}
