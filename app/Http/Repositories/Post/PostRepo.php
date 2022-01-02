<?php


namespace App\Http\Repositories\Post;


use App\Models\Post;

class PostRepo implements PostRepoInterface
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
        return $this->post->all();
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

    public function search($key)
    {
        // TODO: Implement search() method.
    }

    public function findById($id)
    {
        return $this->post->findOrFail($id);
    }

    public function lastestPosts()
    {
        return Post::orderBy('id', 'desc')->take(5)->get();
    }
}
