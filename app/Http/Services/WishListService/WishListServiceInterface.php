<?php


namespace App\Http\Services\WishListService;


use App\Http\Services\ServiceInterface;

interface WishListServiceInterface extends ServiceInterface
{
    public function checkProductIdInWishList($id);

}
