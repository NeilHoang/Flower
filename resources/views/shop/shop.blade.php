@extends('layouts.shop.master')
@section('content')

{{--    @dd($weather)--}}

<div class="clothing_product_area" >
    <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    @include('layouts.shop.weather')
                    <div class="catagory_price_color">
                        <div class="catagory_area">
                            <h2>{{__('language.title')}}</h2>
                            <ul class="catagory">
                                @foreach($themes as $theme)
                                    <li><a href="{{route('shop.searchByTheme',$theme->id)}}"><i class="fa fa-angle-right"></i>{{$theme->theme}}</a>
                                        <span>({{$theme->products->count()}})</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="catagory_area">
                            <h2>{{__('language.size')}}</h2>
                            <ul class="catagory">
                                @foreach($sizes as $size)
                                    <li><a href="{{route('shop.searchBySize',$size->id)}}"><i class="fa fa-angle-right"></i>{{$size->size}}</a> <span>({{$size->products->count()}})</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="catagory_area">
                            <h2>{{__('language.category')}}</h2>
                            <ul class="catagory">
                                @foreach($forms as $form)
                                    <li><a href="{{route('shop.searchByForm',$form->id)}}"><i class="fa fa-angle-right"></i>{{$form->form}}</a> <span>({{$form->products->count()}})</span>
                                    </li>
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
                                        <a href="#"><img src="{{asset('img/banner/banner_left.jpg')}}" alt=""/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="popular_tag_area">
                                <div class="popular_items">
                                    <h2>Highlights</h2>
                                </div>
                            </div>
                            <div class="clothing_carousel_list">
                                <div class="single_clothing_product">
                                    <div class="clothing_item">
                                        <img src="{{asset('img/product/pr1.png')}}" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Beauty Calla Lily Bouquety</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$13.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="{{asset('img/product/pr6.png')}}" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Special Bouquet</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$12.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="{{asset('img/product/pr8.png')}}" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Breathtaking Beauty Bouquet</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$123.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_clothing_product">
                                    <div class="clothing_item">
                                        <img src="{{asset('img/bestseller/10.jpg')}}" alt=""/>
                                        <div class="product_clothing_details">
                                            <h2><a href="#">Cheerful Wishes Blooming Basket</a></h2>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <p>$14.00</p>
                                        </div>
                                    </div>
                                    <div class="clothing_item">
                                        <img src="{{asset('img/bestseller/11_1.jpg')}}" alt=""/>
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
                                        <img src="{{asset('img/bestseller/16.jpg')}}" alt=""/>
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
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="catagory_banner">
                                <img src="img/banner/category.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="my_tabs">
                        <ul class="tab_style">
                            <li class="active"><a data-toggle="tab" href="#tab1"><span><i
                                            class="fa fa-th"></i></span></a></li>
                            <li><a data-toggle="tab" href="#tab2"><span><i class="fa fa-th-list"></i></span></a></li>
                        </ul>
                        <div class="limiter">
                            <label>Show</label>
                            <select>
                                <option value="">9</option>
                                <option value="" selected="selected">12</option>
                                <option value="">24</option>
                                <option value="">36</option>
                            </select> per page
                        </div>
                        <div class="sort-by">
                            <label>Sort By</label>
                            <select>
                                <option value="" selected="selected">Position</option>
                                <option value="">Name</option>
                                <option value="">Price</option>
                            </select>
                            <a href=""><i class="fa fa-long-arrow-up"></i></a>
                        </div>

                        <div class="tab-content tab_content_style">
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="product_list">
                                                <div class="single_product repomsive_768">
                                                    <a href="{{ route('shop.index',$product->id) }}" target="main"><img
                                                            style="width: 300px; height: 300px"
                                                            src="{{asset('storage/images/products/'.$product->image)}}"
                                                            alt=""/></a>
                                                    <div class="product_details">
                                                        <h2>{{$product->name}}</h2>
                                                        <p><span
                                                                class="regular_price">$ {{number_format($product->price)}}</span><span
                                                                class="popular_price">$ {{number_format($product->sale)}}</span>
                                                        </p>
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
                                                                <a href="{{ route('cart.addToCart', $product->id) }}">Add to cart</a>
                                                            </div>
                                                            <div class="cart_details">
                                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                            </div>
                                                            <div class="cart_details">
                                                                <a href="{{route('wishlist.addToWishList',$product->id)}}" target="heart"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
