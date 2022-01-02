<div class="header_area_top" >
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
                <!--Start Search area -->
                <form action="{{route('shop.search')}}" name="myForm" method="GET">
                    <div class="search_box">
                        <input name="key" id="itp" class="input_text" type="text" placeholder="Search" required/>
                        <button type="submit" class="btn-search">
                            <span><i class="fa fa-search"></i></span>
                        </button>
                    </div>
                </form>
                <!--End Search area -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Logo area -->
                <div class="logo">
                    <a href="{{route('showList')}}">
                        <img src="{{asset('img/logo/logo3.png')}}" alt=""/>
                    </a>
                </div>
                <!--End Logo area -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Header Right Cart area -->
                <div class="account_card_area">
                    <ul id="account_nav">
                        <li><a href="#"><i
                                    class="fa fa-key"></i>{{\Illuminate\Support\Facades\Auth::user()->name ?? __('language.Account')}}
                            </a>
                            <div class="account_menu_list">
                                <div class="account_single_item">
                                    <h2>{{__('language.Currency')}}</h2>
                                    <ul id="account_single_nav_1">
                                        <li><a href="#">{{__('language.Euro')}}</a></li>
                                        <li><a href="#">{{__('language.US_Dollar')}}</a></li>
                                    </ul>
                                </div>
                                <div class="account_single_item">
                                    <h2>{{__('language.Language')}}</h2>
                                    <ul id="account_single_nav_2">
                                        <li>
                                            <a href="{{ route('user.change-language', 'en') }}">{{__('language.English')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.change-language', 'vi') }}">{{__('language.Vietnames')}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="account_single_item">
                                    <h2>{{__('language.Setting')}}</h2>
                                    <ul id="account_single_nav_3">
                                        <li><a href="{{route('admin.index')}}">{{__('language.My_Account')}}</a></li>
                                        <li><a href="{{route('wishlist.index')}}">{{__('language.My_Wishlist')}}</a>
                                        </li>
                                        <li><a href="{{route('cart.index')}}">{{__('language.My_Cart')}}</a></li>
                                        <li><a href="">{{__('language.Checkout')}}</a></li>
                                        <li><a href="#">{{__('language.Testimonial')}}</a></li>
                                        <li><a href="">{{__('language.Blog')}}</a></li>
                                        @auth
                                            <li><a href="{{route('logout')}}">{{__('language.Logout')}}</a></li>
                                        @else
                                            <li><a href="{{route('showLogin')}}">{{__('language.Login')}}</a></li>
                                        @endauth
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('cart.index')}}"><i class="fa fa-shopping-cart"></i>Cart <span
                                    class="cart_zero">{{ (Session::has('cart')) ? count(Session::get('cart')->items) : "0" }}</span></a>
                            <div class="cart_down_area">
                                @if(Session::has('cart'))
                                    @foreach ($cart->items as $product)
                                        <div class="cart_single">
                                            <a href="#"><img
                                                    src="{{asset('storage/images/products/'. $product['item']->image) }}"
                                                    style="width: 20%;height: 20%" alt=""/></a>
                                            <h2><a href="#">{{ $product['item']->name }}</a> <a
                                                    href="{{ route('cart.removeProductIntoCart', $product['item']->id) }}"><span><i
                                                            class="fa fa-trash"></i></span></a></h2>
                                            <p>{{ '$' . $product['item']->price }} * {{ $product['qty'] }}</p>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="cart_shoptings">
                                    <a href="{{route('cart.index')}}">{{__('language.Cart')}}</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End Header Right Cart area -->
            </div>
        </div>
    </div>
</div>
