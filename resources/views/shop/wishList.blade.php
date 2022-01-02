@extends('layouts.shop.master')
@section('content')

    <div class="clothing_product_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    @include('layouts.shop.weather')
                    <div class="catagory_price_color">
                        <div class="catagory_area">
                            <h2>{{__('language.title')}}</h2>
                            <ul class="catagory">
                                @foreach($themes as $theme)
                                    <li><a href="{{route('shop.searchByTheme',$theme->id)}}"><i
                                                class="fa fa-angle-right"></i>{{$theme->theme}}</a>
                                        <span>({{$theme->products->count()}})</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="popular_tag_area">
                        <div class="popular_items">
                            <h2>{{__('language.flower')}}</h2>
                            <ul id="single_popular">
                                @foreach($types as $type)
                                    <li><a href="{{route('shop.searchByType',$type->id)}}">{{$type->type}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="popular_tag_area popular_tag_response">
                                <div class="popular_items">
                                    <h2>COMPARE PRODUCTS</h2>
                                    <div class="conpany_product_details">
                                        <p>You have no items to compare.</p>
                                        <a href="#"><img src="img/banner/banner_left.jpg" alt=""/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="popular_tag_area">
                                <div class="popular_items">
                                    <h2>BESTSELLERS</h2>
                                </div>
                            </div>
                            <div class="clothing_carousel_list">
                                <div class="single_clothing_product">
                                    <div class="clothing_item">
                                        <img src="img/product/pr4.png" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Nam ullamcorper vive</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$20.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="img/product/pr5.png" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Nam ullamcorper vive</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$13.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="img/product/pr6.png" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Nam ullamcorper vive</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$12.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_clothing_product">
                                    <div class="clothing_item">
                                        <img src="img/bestseller/10.jpg" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Nam ullamcorper vive</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$123.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="img/bestseller/11_1.jpg" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Nam ullamcorper vive</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$123.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="img/bestseller/16.jpg" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Nam ullamcorper vive</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$123.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="wishlist-page-area cart-page-main-area">
                        <div class="sec-heading-area">
                            <h2>My Wishlist</h2>
                        </div>
                        <div class="myaccount-dashboard my-wish-list">
                            <div class="responsive-wishlist">
                                <table class="table wishlist-table cart-table">
                                    <thead>
                                    <tr>
                                        <th class="width-1"></th>
                                        <th class="width-2">Product Details & Comment</th>
                                        <th class="width-3">Add to Cart</th>
                                        <th class="width-4"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if (is_array($products) || is_object($products))

                                    @foreach($products as $product)
                                        <tr class="wishlist_1">
                                            <td>
                                                <div class="cartpage-image">
                                                    <a href="#"><img
                                                            src="{{asset('storage/images/products/'.$product->image)}}"
                                                            alt="" style="width: 100px"/></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cartpage-pro-dec">
                                                    <h2><a href="#">{{$product->name}}</a></h2>
                                                    {!!  $product->description !!}
                                                    <textarea class="yourmessage"
                                                              placeholder="Please, enter your comments..."></textarea>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-page-edit">
                                                    <div class="w-price">
                                                        <span class="regular-price">{{$product->price}}</span>
                                                    </div>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                               value="0">
                                                    </div>
                                                    <div class="pro-add-to-cart">
                                                        <p><a title="Add to Cart"
                                                              href="{{route('cart.addToCart', $product->id)}}">Add to
                                                                Cart</a></p>
                                                    </div>
                                                    <div class="w-edit">
                                                        <a href="#">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cartpage-item-remove">
                                                    <a title="Remove"
                                                       href="{{route('wishlist.deleteFromWishList',$product->id)}}">Remove</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="cartpage-button">
                                <div class="button-right">
                                    <a href="" class="add-tag-btn cartpage-btn-1">Share Wishlist</a>
                                    <a href="" class="add-tag-btn cartpage-btn-2">Add All to Cart</a>
                                    <a href="" class="add-tag-btn cartpage-btn-3">Update Wishlist</a>
                                </div>
                            </div>
                            <a href="#" class="wishlist-back"><i class="fa fa-angle-double-left"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
