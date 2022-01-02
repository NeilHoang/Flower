@extends('layouts.shop.master')
@section('content')
    <section class="slider-area">
        <!-- slider start -->
        <div class="slider">
            <div id="mainSlider" class="nivoSlider nevo-slider">
                <img src="{{asset('img/slider/slider-1.jpg')}}" alt="main slider" title="#htmlcaption1"/>
                <img src="{{asset('img/slider/slider-2.jpg')}}" alt="main slider" title="#htmlcaption2"/>
            </div>
            <div id="htmlcaption1" class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
                <div class="slider-text">
                    <div class="middle-text">
                        <div class="width-cap">
                            <h3 class="slider-tiile-top top-ani-1" style="font-size: 60px;">
                                <span>{{__('language.Flower_For_your')}}</span>
                            </h3>
                            <h2 class="slider-tiile-middle middle-ani-1"><span>{{__('language.Special')}}</span></h2>
                            <div class="slider-readmore">
                                <a href="">{{__('language.Contact')}}</a>
                            </div>
                            <div class="slider-shopping">
                                <a href="{{route('showShop')}}">{{__('language.Shopping_Now')}}</a>
                            </div>
                        </div>
                    </div>
                    w
                </div>
            </div>
            <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
                <div class="slider-text">
                    <div class="middle-text">
                        <div class="width-cap">
                            <h3 class="slider2-tiile-top top-ani-2">
                                <span>{{__('language.The_Bigest_Selection_Of_Fresh_Flowers')}}</span>
                            </h3>
                            <h2 class="slider2-tiile-middle middle-ani-2"><span>{{__('language.Fresh_Tulips')}}</span>
                            </h2>
                            <div class="slider2-readmore">
                                <a href="">{{__('language.Contact')}}</a>
                            </div>
                            <div class="slider2-shop">
                                <a href="{{route('showShop')}}">{{__('language.Shopping_Now')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end -->
    </section>
    <div class="body_top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="{{asset('img/collection-image/banner-1.jpg')}}"
                                         alt=""/></a>
                        <div class="banner_text">
                            <h2><a href="#">{{__('language.Birthday_Bouguets')}}</a></h2>
                        </div>
                        <div class="shop_collection">
                            <a href="">{{__('language.Shop_the_Collection')}} <span><img
                                        src="{{asset('img/arrow/bkg_newsletter.png')}}"
                                        alt=""/></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="{{asset('img/collection-image/banner-2.jpg')}}"
                                         alt=""/></a>
                        <div class="banner_text">
                            <h2><a href="#">{{__('language.Wedding_Flower')}}</a></h2>
                        </div>
                        <div class="shop_collection">
                            <a href="">{{__('language.Shop_the_Collection')}}<span><img
                                        src="{{asset('img/arrow/bkg_newsletter.png')}}"
                                        alt=""/></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="{{asset('img/collection-image/banner-11.jpg')}}"
                                         alt=""/></a>
                        <div class="banner_text">
                            <h3><a href="#">{{__('language.Love_&_Romance')}}</a></h3>
                        </div>
                        <div class="shop_collection">
                            <a href="">{{__('language.Shop_the_Collection')}}<span><img
                                        src="{{asset('img/arrow/bkg_newsletter.png')}}"
                                        alt=""/></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="{{asset('img/collection-image/banner-12.jpg')}}"
                                         alt=""/></a>
                        <div class="banner_text">
                            <h3><a href="#">{{__('language.Valentine_Day_Flower')}}</a></h3>
                        </div>
                        <div class="shop_collection">
                            <a href="">{{__('language.Shop_the_Collection')}}<span><img
                                        src="{{asset('img/arrow/bkg_newsletter.png')}}"
                                        alt=""/></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single_image">
                        <a href="#"><img class="banner_home1" src="{{asset('img/collection-image/banner-13.jpg')}}"
                                         alt=""/></a>
                        <div class="banner_text">
                            <h3><a href="#">{{__('language.Sale_up_to_20%_off')}}</a></h3>
                        </div>
                        <div class="shop_collection">
                            <a href="">{{__('language.Shop_the_Collection')}}<span><img
                                        src="{{asset('img/arrow/bkg_newsletter.png')}}"
                                        alt=""/></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="feature_text">
                        <h4>{{__('language.Featured_Product')}}</h4>
                    </div>
                </div>
            </div>
            <div class="row">

                @if (Session::has('success'))
                    <div class="col-12 alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ Session::get('success') }}</strong>
                    </div>

                @endif

                @if (Session::has('delete_error'))
                    <div class="col-12 alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ Session::get('delete_error') }}</strong>
                    </div>

                @endif
                @forelse($products as $product)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="product_list">

                            <div class="single_product">
                                <a href="{{ route('shop.index',$product->id) }}" target="main"><img
                                        src="{{asset('storage/images/products/'.$product->image)}}"
                                        style="width: 300px;height: 300px" alt=""/></a>
                                <div class="product_details">
                                    <h2>{{$product->name}}</h2>
                                    <p><span class="regular_price">${{$product->price}}</span> <span
                                            class="popular_price">${{$product->sale}}</span></p>
                                </div>
                                <div class="product_detail">
                                    <div class="star_icon">
                                        @if(\App\Http\Services\Product\ProductService::getStar($product->id)!=0)
                                            @for($i=0;$i<\App\Http\Services\Product\ProductService::getStar($product->id);$i++)<i class="fa fa-star"></i>  @endfor
                                            @for($i=0;$i<5-\App\Http\Services\Product\ProductService::getStar($product->id);$i++)<i class="fa fa-star-o"></i>  @endfor
                                        @else No rate
                                        @endif
                                    </div>
                                    <div class="product_button">
                                        <div class="cart_details">
                                            <a href="{{ route('cart.addToCart', $product->id) }}">Add to
                                                cart</a>
                                        </div>
                                        <div class="cart_details">
                                            <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                        </div>
                                        <div class="cart_details">
                                            <a href="{{route('wishlist.addToWishList',$product->id)}}" target="heart"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @if($product->sale < $product->price)
                                    <div class="sale_product">
                                        <h5>{{__('language.Sale')}}</h5>
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                @empty
                    <p>{{ "Không có sản phẩm nào" }}</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection

