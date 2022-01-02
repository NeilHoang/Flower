<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\SizeController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\ColorController;
use \App\Http\Controllers\ThemeController;
use \App\Http\Controllers\FormController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\TypeController;
use \App\Http\Controllers\ReviewController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\ReturnShopController;
use \App\Http\Controllers\DetailsPorductController;
use \App\Http\Controllers\ShoppingCartController;
use \App\Http\Controllers\LanguageController;
use \App\Http\Controllers\SocialController;
use \App\Http\Controllers\GoogleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/login', [LoginController::class, 'showFormLogin'])->name('showLogin');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login-{id}', [LoginController::class, 'loginToReview'])->name('login.review');

Route::get('/', [ReturnShopController::class, 'index'])->name('showList');
Route::get('showShop', [ReturnShopController::class, 'showShop'])->name('showShop');
Route::get('showBlog', [ReturnShopController::class, 'showBlog'])->name('showBlog');
Route::get('showCart', [ReturnShopController::class, 'showCart'])->name('showCart');

Route::get('/details-{id}', [DetailsPorductController::class, 'index'])->name('shop.index');
Route::post('/new/review', [DetailsPorductController::class, 'store'])->name('shop.store');
Route::get('/star/{id}', 'DetailsProductController@detailOnHomePage');

Route::get('singleBlog-{id}', [ReturnShopController::class, 'singleBlog'])->name('singleBlog');

Route::get('/search', [ReturnShopController::class, 'search'])->name('shop.search');
Route::get('/findBySize-{id}', [ReturnShopController::class, 'findProductBySizeId'])->name('shop.searchBySize');
Route::get('/findByForm-{id}', [ReturnShopController::class, 'findProductByFormId'])->name('shop.searchByForm');
Route::get('/findByTheme-{id}', [ReturnShopController::class, 'findProductByThemeId'])->name('shop.searchByTheme');
Route::get('/findByType-{id}', [ReturnShopController::class, 'findProductByTypeId'])->name('shop.searchByType');
Route::get('/findByColor-{id}', [ReturnShopController::class, 'findProductByColor'])->name('shop.searchByColor');


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.index');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::post('/edit/{id}', [UserController::class, 'update'])->name('user.edit');
        Route::post('/editUser/{id}', [UserController::class, 'updateUser'])->name('user.editUser');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.showedit');
        Route::post('/editRole/{id}', [UserController::class, 'editRole'])->name('user.role');
        Route::get('/editRole/{id}', [UserController::class, 'showEditRole'])->name('user.showEditRole');
    });

    Route::prefix('size')->group(function () {
        Route::get('/', [SizeController::class, 'index'])->name('size.index');
        Route::get('/create', [SizeController::class, 'create'])->name('size.create');
        Route::post('/store', [SizeController::class, 'store'])->name('size.store');
        Route::get('/{id}/destroy', [SizeController::class, 'destroy'])->name('size.destroy');
        Route::get('/{id}/edit', [SizeController::class, 'edit'])->name('size.edit');
        Route::post('/{id}/update', [SizeController::class, 'update'])->name('size.update');
    });

    Route::prefix('/post')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::get('/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/create', [PostController::class, 'store'])->name('post.store');
        Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::post('/edit/{id}', [PostController::class, 'update'])->name('post.update');
    });

    Route::prefix('color')->group(function () {
        Route::get('/', [ColorController::class, 'index'])->name('color.list');
        Route::get('/create', [ColorController::class, 'create'])->name('color.create');
        Route::post('/store', [ColorController::class, 'store'])->name('color.store');
        Route::get('/{id}/destroy', [ColorController::class, 'destroy'])->name('color.destroy');
        Route::get('/{id}/edit', [ColorController::class, 'edit'])->name('color.edit');
        Route::post('/{id}/update', [ColorController::class, 'update'])->name('color.update');
    });

    Route::prefix('themes')->group(function () {
        Route::get('/', [ThemeController::class, 'index'])->name('theme.index');
        Route::get('/delete/{id}', [ThemeController::class, 'destroy'])->name('theme.destroy');
        Route::post('/create', [ThemeController::class, 'store'])->name('theme.create');
        Route::post('/edit/{id}', [ThemeController::class, 'update'])->name('theme.edit');
    });

    Route::prefix('forms')->group(function () {
        Route::get('/', [FormController::class, 'index'])->name('form.index');
        Route::get('/delete/{id}', [FormController::class, 'destroy'])->name('form.destroy');
        Route::post('/create', [FormController::class, 'store'])->name('form.create');
        Route::post('/edit/{id}', [FormController::class, 'update'])->name('form.edit');
    });

    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/edit/{id}', [ProductController::class, 'update'])->name('product.update');
    });

    Route::prefix('types')->group(function () {
        Route::get('/', [TypeController::class, 'index'])->name('type.list');
        Route::get('/create', [TypeController::class, 'create'])->name('type.create');
        Route::post('/store', [TypeController::class, 'store'])->name('type.store');
        Route::get('/{id}/destroy', [TypeController::class, 'destroy'])->name('type.destroy');
        Route::get('/{id}/edit', [TypeController::class, 'edit'])->name('type.edit');
        Route::post('/{id}/update', [TypeController::class, 'update'])->name('type.update');
    });

    Route::prefix('reviews')->group(function () {
        Route::get('/index', [ReviewController::class, 'index'])->name('review.index');
        Route::get('/delete/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');
        Route::post('/create', [ReviewController::class, 'store'])->name('review.create');
        Route::post('/edit/{id}', [ReviewController::class, 'update'])->name('review.edit');
    });

    Route::prefix('comments')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('comment.index');
        Route::post('create', [CommentController::class, 'store'])->name('comment.store');
        Route::get('delete/{id}', [CommentController::class, 'destroy'])->name('comment.delete');
        Route::get('edit/{id}', [CommentController::class, 'edit'])->name('comment.edit');
        Route::post('edit/{id}', [CommentController::class, 'update'])->name('comment.update');
    });

});
Route::middleware('locale')->group(function () {

    Route::get('/', [ReturnShopController::class, 'index'])->name('showList');
    Route::get('showShop', [ReturnShopController::class, 'showShop'])->name('showShop');
    Route::get('showBlog', [ReturnShopController::class, 'showBlog'])->name('showBlog');
    Route::get('showCart', 'ReturnShopController@showCart')->name('showCart');
    Route::get('/cart', [ShoppingCartController::class, 'index'])->name('cart.index');
    Route::get('/index', [ShoppingCartController::class, 'showFormCart'])->name('cart.cart');
//Cart
    Route::get('/add-to-cart/{id}', [ShoppingCartController::class, 'addToCart'])->name('cart.addToCart');
    Route::get('/remove-to-cart/{id}', [ShoppingCartController::class, 'removeProductIntoCart'])->name('cart.removeProductIntoCart');
    Route::post('/update-to-cart/{id}', [ShoppingCartController::class, 'updateProductIntoCart'])->name('cart.updateProductIntoCart');

//wishlist
    Route::get('wishlist', [ReturnShopController::class, 'wishlist'])->name('wishlist.index');
    Route::get('add-to-wishlist/{id}', [ReturnShopController::class, 'addToWishList'])->name('wishlist.addToWishList');
    Route::get('delete-wishlist/{id}', [ReturnShopController::class, 'deleteProductInWishList'])->name('wishlist.deleteFromWishList');

//Language
    Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('user.change-language');
//Login Facebook
    Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
    Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
//Login Goolge
    Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
    Route::get('callback/google', [GoogleController::class, 'handleGoogleCallback']);

});

