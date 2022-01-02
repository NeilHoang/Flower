<?php


namespace App\Http\Services\Product;


use App\Http\Services\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface
{
    public function paginating();

    public function getEightProduct();
    public function findProductBySizeId($id);
    public function findProductByFormId($id);
    public function findProductByThemeId($id);
    public function findProductByTypeId($id);
    public static function getStar($id);
}
