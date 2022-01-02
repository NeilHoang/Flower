<?php


namespace App\Http\Repositories\Post;


use App\Http\Repositories\RepositoryInterface;

interface PostRepoInterface extends RepositoryInterface
{
    public function lastestPosts();

}
