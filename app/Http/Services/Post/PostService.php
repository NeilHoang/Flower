<?php


namespace App\Http\Services\Post;


use App\Http\Repositories\Post\PostRepoInterface;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostService implements PostServiceInterface
{
    protected $postRepo;

    public function __construct(PostRepoInterface $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function getAll()
    {
        return $this->postRepo->getAll();
    }

    public function store($request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->user_id = Auth::id();

        if (!$request->hasFile('image')) {
            $post->image = $request->image;
        } else {
            $image = $request->image;
            $imageName = date('Y-m-d H:i:s') . $image->getClientOriginalName();
            $request->image->storeAs('public/images/posts', $imageName);
            $post->image = $imageName;
        }
        $this->postRepo->store($post);
    }


    public function update($request, $id)
    {
        $post = $this->postRepo->findById($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        if ($request->image) {
            $currentImage = $post->image;
            if ($currentImage) {
                Storage::delete('/public/images/posts/'.$currentImage);
            }
            $image = $request->image;
            $imageName = date('Y-m-d H:i:s') . $image->getClientOriginalName();
            $request->image->storeAs('public/images/posts', $imageName);
            $post->image = $imageName;
        }
        $this->postRepo->update($post);

    }

    public function destroy($id)
    {
        $post = $this->postRepo->findById($id);
        if ($post->image) {
            Storage::delete('public/images/posts/'.$post->image);
        }
        $this->postRepo->destroy($post);
    }

    public function search($request)
    {
        // TODO: Implement search() method.
    }

    public function findById($id)
    {
        return $this->postRepo->findById($id);
    }

    public function lastestPosts()
    {
        return $this->postRepo->lastestPosts();
    }
}
