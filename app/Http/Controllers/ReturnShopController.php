<?php

namespace App\Http\Controllers;

use App\Http\Services\Color\ColorService;
use App\Http\Services\Comment\CommentService;
use App\Http\Services\Form\FormService;
use App\Http\Services\Post\PostService;
use App\Http\Services\Product\ProductService;
use App\Http\Services\Size\SizeService;
use App\Http\Services\Theme\ThemeService;
use App\Http\Services\Type\TypeService;
use App\Models\Cart;
use App\Http\Services\Weather\WeatherService;
use App\Http\Services\WishListService\WishListService;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use Illuminate\Http\Request;

class ReturnShopController extends Controller
{
    protected $productService;
    protected $formService;
    protected $typeService;
    protected $colorService;
    protected $sizeService;
    protected $postService;
    protected $themeService;
    protected $commentService;
    protected $wishListService;
    protected $weatherService;

    public function __construct(ProductService $productService, FormService $formService, TypeService $typeService, ColorService $colorService, SizeService $sizeService, PostService $postService, ThemeService $themeService, CommentService $commentService, WishListService $wishListService, WeatherService $weatherService)
    {
        $this->productService = $productService;
        $this->formService = $formService;
        $this->typeService = $typeService;
        $this->colorService = $colorService;
        $this->sizeService = $sizeService;
        $this->postService = $postService;
        $this->themeService = $themeService;
        $this->commentService = $commentService;
        $this->wishListService = $wishListService;
        $this->weatherService = $weatherService;
    }

    public function index()
    {
        $products = $this->productService->getEightProduct();
        $cart = Session::get('cart');
        return view('shop.index', compact('products', 'cart'));
    }

    public function showShop()
    {
        $weather = $this->weatherService->listWeather();
        $cart = Session::get('cart');
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $colors = $this->colorService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->paginating();
        return view('shop.shop', compact('products', 'forms', 'types', 'colors', 'sizes', 'themes', 'cart', 'weather'));
    }

    public function showBlog()
    {
        $weather = $this->weatherService->listWeather();
        $cart = Session::get('cart');
        $posts = $this->postService->getAll();
        $lastestPosts = $this->postService->lastestPosts();
        return view('shop.blog', compact('posts', 'cart', 'lastestPosts', 'weather'));
    }

    public function singleBlog($id)
    {
        $weather = $this->weatherService->listWeather();
        $comments = $this->commentService->findByPostId($id);
        $post = $this->postService->findById($id);
        $cart = Session::get('cart');
        $lastestPosts = $this->postService->lastestPosts();

        return view('shop.singleBlog', compact('post', 'comments', 'cart', 'lastestPosts', 'weather'));
    }

    public function search(Request $request)
    {
        $weather = $this->weatherService->listWeather();
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->search($request);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'sizes', 'themes', 'cart', 'weather'));
    }

    public function findProductBySizeId($id)
    {
        $weather = $this->weatherService->listWeather();
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductBySizeId($id);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'sizes', 'themes', 'cart', 'weather'));
    }

    public function findProductByFormId($id)
    {
        $weather = $this->weatherService->listWeather();
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductByFormId($id);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'sizes', 'themes', 'cart', 'weather'));
    }

    public function findProductByThemeId($id)
    {
        $weather = $this->weatherService->listWeather();
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductByThemeId($id);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'cart', 'sizes', 'themes', 'weather'));
    }

    public function findProductByTypeId($id)
    {
        $weather = $this->weatherService->listWeather();
        $forms = $this->formService->getAll();
        $types = $this->typeService->getAll();
        $sizes = $this->sizeService->getAll();
        $themes = $this->themeService->getAll();
        $products = $this->productService->findProductByTypeId($id);
        $cart = Session::get('cart');
        return view('shop.shop', compact('products', 'forms', 'types', 'cart', 'sizes', 'themes', 'weather'));
    }

    public function wishlist()
    {
        $weather = $this->weatherService->listWeather();
        $products = $this->wishListService->getAll();
        $themes = $this->themeService->getAll();
        $types = $this->typeService->getAll();
        $cart = Session::get('cart');
        return view('shop.wishList', compact('products', 'themes', 'types', 'cart', 'weather'));
    }

    public function addToWishList($id)
    {
        $this->wishListService->store($id);
        return redirect()->back();
    }

    public function deleteProductInWishList($id)
    {
        $this->wishListService->destroy($id);
        return redirect()->route('wishlist.index');
    }


}
