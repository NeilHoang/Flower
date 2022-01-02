<?php


namespace App\Http\Services\Post;


use App\Http\Services\ServiceInterface;

interface PostServiceInterface extends ServiceInterface
{
    public function lastestPosts();

}
