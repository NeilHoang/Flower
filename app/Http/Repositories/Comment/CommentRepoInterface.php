<?php


namespace App\Http\Repositories\Comment;


use App\Http\Repositories\RepositoryInterface;

interface CommentRepoInterface extends RepositoryInterface
{
    public function findByPostId($id);

}
