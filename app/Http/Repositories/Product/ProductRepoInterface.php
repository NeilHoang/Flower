<?php


namespace App\Http\Repositories\Product;


use App\Http\Repositories\RepositoryInterface;

interface ProductRepoInterface extends RepositoryInterface
{
    public function paginating();

    public function getEightProduct();
    public function findProductBySizeId($id);
    public function findProductByFormId($id);
    public function findProductByThemeId($id);
    public function findProductByTypeId($id);
}
