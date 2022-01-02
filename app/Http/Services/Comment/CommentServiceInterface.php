<?php


namespace App\Http\Services\Comment;


use App\Http\Services\ServiceInterface;

interface CommentServiceInterface extends ServiceInterface
{
    public function findByPostId($id);
    public function findByPostIdUseAJAX($id);

}
