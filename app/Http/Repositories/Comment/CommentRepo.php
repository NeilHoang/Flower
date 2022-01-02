<?php


namespace App\Http\Repositories\Comment;


use App\Models\Comment;

class CommentRepo implements CommentRepoInterface
{
    protected $comment;
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function getAll()
    {
        return $this->comment->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        return $this->comment->findOrFail($id);
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete($obj);
    }

    public function search($key)
    {
        // TODO: Implement search() method.
    }

    public function findByPostId($id)
    {
        return Comment::where('post_id',$id)->get();
    }
}
