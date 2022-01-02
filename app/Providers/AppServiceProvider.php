<?php

namespace App\Providers;

use App\Http\Repositories\Comment\CommentRepo;
use App\Http\Repositories\Comment\CommentRepoInterface;
use App\Http\Repositories\Post\PostRepo;
use App\Http\Repositories\Post\PostRepoInterface;
use App\Http\Repositories\Product\ProductRepo;
use App\Http\Repositories\Product\ProductRepoInterface;
use App\Http\Repositories\WishListRepo\WishListRepo;
use App\Http\Repositories\WishListRepo\WishListRepoInterface;
use App\Http\Services\Comment\CommentService;
use App\Http\Services\Comment\CommentServiceInterface;
use App\Http\Services\Post\PostService;
use App\Http\Services\Post\PostServiceInterface;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Product\ProductServiceInterface;
use App\Http\Services\WishListService\WishListService;
use App\Http\Services\WishListService\WishListServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PostServiceInterface::class, PostService::class);
        $this->app->singleton(PostRepoInterface::class, PostRepo::class);
        $this->app->singleton(ProductRepoInterface::class, ProductRepo::class);
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(CommentServiceInterface::class, CommentService::class);
        $this->app->singleton(CommentRepoInterface::class, CommentRepo::class);
        $this->app->singleton(WishListServiceInterface::class, WishListService::class);
        $this->app->singleton(WishListRepoInterface::class, WishListRepo::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
