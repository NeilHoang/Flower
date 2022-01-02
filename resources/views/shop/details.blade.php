@extends('layouts.shop.master')
@section('content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single breadcrumb_top">
                        <ul id="breadcrumbs">
                            <li><a href="{{ route('showList') }}"><i class="fa fa-home"></i>Home</a></li>
                            <li><span>I</span></li>
                            <li>{{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_single_view_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="my_tabs">
                        <div class="tab-content tab_content_style">
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="blog_tabs">
                                    <a class="fancybox" href="{{asset('storage/images/products/'.$product->image)}}"
                                       data-fancybox-group="gallery" title="Hoa huong duong"><img style="width: 350px;"
                                                                                                  src="{{asset('storage/images/products/'.$product->image)}}"
                                                                                                  alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="blog_product_details">
                        <h2 class="blog_heading"><a href="">{{ $product->name }}</a></h2>
                        <div class="product_rating">
                            @if($avgStar!=0)
                                @for($i=0;$i<$avgStar;$i++)<i class="fa fa-star"></i>  @endfor
                                @for($i=0;$i<5-$avgStar;$i++)<i class="fa fa-star-o"></i>  @endfor
                            @else No rate
                            @endif
                        </div>
                        <div class="product_rating">
                            {{ $reviews->count() }} Review(s)
                        </div>
                        <div class="pricing_rate">
                            @if($product->quantity != 0)
                                <p class="stack">Availability:<span class="in-stock"> In stock</span></p>
                            <p style="color: #1cc88a">Welcome to MONK-EYES Shopping, this is the shopping cart page</p>
                            <p style="color: #00A9E0">Please take a look at the specifications of this product</p>
                                <p class="rating_dollor rating_margin"><span class="rating_value_one dollor_size">${{$product->sale}}</span> <span
                                        class="rating_value_two">${{ $product->price }}</span></p>
                            @else <p class="stack">Availability:<span class="in-stock"> Out of stock</span></p>
                            @endif
                        </div>
                        <div class="product_options_area">
                            <div class="cart_blog_item">
                                <div class="add-to-cart">
                                    <input type="text" title="Qty" style="width: 150px" value="{{$product->quantity}}"
                                           class="qty"/>
                                    <button class="cart_button"><a href="{{ route('cart.addToCart', $product->id) }}"
                                                                   title="Add to Cart"><span>Add to Cart</span>
                                        </a></button>
                                    <div class="cart_blog_details blog_icon_border" style="margin-left: 20px">
                                        <a href="{{route('wishlist.addToWishList',$product->id)}}" target="blank"><i
                                                class="fa fa-heart-o"></i></a>
                                    </div>
                                    <div class="cart_blog_details blog_icon_border">
                                        <a href="" target="expand"><i class="fa fa-retweet"></i></a>
                                    </div>
                                    <div class="cart_blog_details blog_icon_border">
                                        <a href="" target="heart"><i class="fa fa-envelope"></i></a>
                                    </div>
                                    <div style="margin-left: 20px;margin-top: 10px">
                                        @forelse($reviews as $review)
                                            <i class="fa fa-user"> </i> {{ $review->user->name }} rated
                                            with @for($i=0;$i<$review->star;$i++)<i class="fa fa-star"
                                                                                    style="color: orange"></i>  @endfor
                                            @for($i=0;$i<5-$review->star;$i++)<i class="fa fa-star-o"
                                                                                 style="color: orange"></i>  @endfor
                                            <br>
                                            {{ $review->review }}
                                            <hr>

                                        @empty
                                            No review about this product
                                        @endforelse
                                        {{ $reviews->links() }}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_collateral_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="my_tabs_description">
                                <ul class="tab_style">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab-1">Product Description</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab-2">Reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content tab_content_style">
                                    <div id="tab-1" class="tab-pane fade in active">
                                        <div class="product_description">
                                            {!! $product->description  !!}
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane fade">
                                        @if(\Illuminate\Support\Facades\Auth::user())
                                            @if(\App\Http\Repositories\Review\ReviewRepository::searchByUserAndProduct(\Illuminate\Support\Facades\Auth::user()->id,$product->id))
                                                <form method="post" action="{{ route('shop.store') }}">
                                                    @csrf
                                                    <div class="product_description">
                                                        <div class="fieldsets">
                                                            <h3>You're reviewing: <span>{{ $product->name }}</span></h3>
                                                            <h4>How do you rate this product?*</h4>
                                                            <div class="start_tab_pricing_area">
                                                                <fieldset>
                                                                    <div class="form-group" style="max-width: 100px">
                                                                        <label>Star</label>
                                                                        <select class="form-control" name="star">
                                                                            <option @if(\App\Http\Repositories\Review\ReviewRepository::searchByUserAndProduct(\Illuminate\Support\Facades\Auth::user()->id,$product->id)->star == 1) selected @endif><i class="fa fa-star" >1</i></option>
                                                                            <option @if(\App\Http\Repositories\Review\ReviewRepository::searchByUserAndProduct(\Illuminate\Support\Facades\Auth::user()->id,$product->id)->star == 2) selected @endif><i class="fa fa-star" >2</i></option>
                                                                            <option @if(\App\Http\Repositories\Review\ReviewRepository::searchByUserAndProduct(\Illuminate\Support\Facades\Auth::user()->id,$product->id)->star == 3) selected @endif><i class="fa fa-star" >3</i></option>
                                                                            <option @if(\App\Http\Repositories\Review\ReviewRepository::searchByUserAndProduct(\Illuminate\Support\Facades\Auth::user()->id,$product->id)->star == 4) selected @endif><i class="fa fa-star" >4</i></option>
                                                                            <option @if(\App\Http\Repositories\Review\ReviewRepository::searchByUserAndProduct(\Illuminate\Support\Facades\Auth::user()->id,$product->id)->star == 5) selected @endif><i class="fa fa-star" >5</i></option>
                                                                        </select>
                                                                    </div>
                                                                </fieldset>
                                                            </div>

                                                            <div class="rating_contact">
                                                                <ul id="review_contact">
                                                                    <li><input type="number" name="user"
                                                                               class="input-text required-entry"
                                                                               value="{{ \Illuminate\Support\Facades\Auth::user()->id }}"
                                                                               hidden></li>
                                                                    <li><input type="number" name="product"
                                                                               class="input-text required-entry"
                                                                               value="{{ $product->id }}" hidden></li>
                                                                    <li>Review<span>*</span></li>
                                                                    <li><textarea name="review" cols="5" rows="3"
                                                                                  class="required-entry">{{ \App\Http\Repositories\Review\ReviewRepository::searchByUserAndProduct(\Illuminate\Support\Facades\Auth::user()->id,$product->id)->review }}</textarea></li>
                                                                </ul>
                                                            </div>
                                                            <div class="review_button">
                                                                <button type="submit" title="Submit Review" class="button">
                                                                    Submit
                                                                    Review
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                @else
                                            <form method="post" action="{{ route('shop.store') }}">
                                                @csrf
                                                <div class="product_description">
                                                    <div class="fieldsets">
                                                        <h3>You're reviewing: <span>{{ $product->name }}</span></h3>
                                                        <h4>How do you rate this product?*</h4>
                                                        <div class="start_tab_pricing_area">
                                                            <fieldset>
                                                                <div class="form-group" style="max-width: 100px">
                                                                    <label>Star</label>
                                                                    <select class="form-control" name="star">
                                                                        <option><i class="fa fa-star">1</i></option>
                                                                        <option><i class="fa fa-star">2</i></option>
                                                                        <option><i class="fa fa-star">3</i></option>
                                                                        <option><i class="fa fa-star">4</i></option>
                                                                        <option><i class="fa fa-star">5</i></option>
                                                                    </select>
                                                                </div>
                                                            </fieldset>
                                                        </div>

                                                        <div class="rating_contact">
                                                            <ul id="review_contact">
                                                                <li><input type="number" name="user"
                                                                           class="input-text required-entry"
                                                                           value="{{ \Illuminate\Support\Facades\Auth::user()->id }}"
                                                                           hidden></li>
                                                                <li><input type="number" name="product"
                                                                           class="input-text required-entry"
                                                                           value="{{ $product->id }}" hidden></li>
                                                                <li>Review<span>*</span></li>
                                                                <li><textarea name="review" cols="5" rows="3"
                                                                              class="required-entry"></textarea></li>
                                                            </ul>
                                                        </div>
                                                        <div class="review_button">
                                                            <button type="submit" title="Submit Review" class="button">
                                                                Submit
                                                                Review
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            @endif
                                        @else <br>
                                        <h4> You need login to review about this product</h4>
                                        <a href="{{route('showLogin')}}">Login now?</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
