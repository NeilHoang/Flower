<div class="header_botttom_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Start desktop menu area -->
                <div class="main_menu" >
                    <ul id="nav_menu" class="active_cl">
                        <li><a href="{{route('showList')}}"><span class="Home">{{__('language.Home')}}</span></a>
                        </li>
                        <li><a href="{{route('showShop')}}"><span class="Clothings">{{__('language.Shop')}}</span></a>
                            <div class="mega_menu_list">
                                <div class="single_megamenu">
                                    <h2><a href="">{{__('language.Learning')}}</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Carnation')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Daisy')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Rose')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Gladiolus')}}</a>
                                    </div>
                                </div>
                                <div class="single_megamenu">
                                    <h2><a href="">{{__('language.Lighting')}}</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Carnation')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Daisy')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Rose')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Gladiolus')}}</a>
                                    </div>
                                </div>
                                <div class="single_megamenu">
                                    <h2><a href="">{{__('language.Living_Room')}}</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Carnation')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Daisy')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Rose')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Gladiolus')}}</a>
                                    </div>
                                </div>
                                <div class="single_megamenu">
                                    <h2><a href="">{{__('language.Lamp')}}</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Carnation')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Daisy')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Rose')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Gladiolus')}}</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href=""><span class="Lookbook">{{__('language.Lookbook')}}</span></a>
                            <div class="look_mega_menu">
                                <div class="look_single">
                                    <h3>{{__('language.Rose')}}</h3>
                                    <div class="items_list_lk">
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Yellow_Rose')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.White_Rose')}}</a>
                                    </div>
                                </div>
                                <div class="look_single">
                                    <h3>{{__('language.Orchids')}}</h3>
                                    <div class="items_list_lk">
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Orchids_Samurai')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Orchids_Phalaenopsis')}}</a>
                                    </div>
                                </div>
                                <div class="look_single">
                                    <h3>{{__('language.Chrysanthemum')}}</h3>
                                    <div class="items_list_lk">
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Red_Chrysanthemum')}}</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{{__('language.Yellow_Chrysanthemum')}}</a>
                                    </div>
                                </div>
                                <div class="look_menu_img">
                                    <a href="#"><img src="{{asset('img/banner/banner-1.jpg')}}" alt="" /></a>
                                    <a href="#"><img src="{{asset('img/banner/banner-2.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('showBlog')}}"><span class="Footwear">{{__('language.BLOG')}}</span></a>
                        </li>
                        <li><a href=""><span class="Sales">{{__('language.Clothing')}}</span></a>
                        </li>
                        <li><a href=""><span class="Accessaries">{{__('language.Pages')}}</span></a>
                            <div class="home_mega_menu">
                                <a href="">{{__('language.About_Us')}}</a>
                                <a href="">{{__('language.Contact')}}</a>
                                <a href="">{{__('language.Cart')}}</a>
                                <a href="">{{__('language.Product')}}</a>
                                <a href="">{{__('language.Checkout')}}</a>
                                <a href="">{{__('language.My_Account')}}</a>
                                <a href="">{{__('language.Wishlist')}}</a>
                                <a href="">{{__('language.404_page')}}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End desktop menu area -->
            </div>
        </div>
    </div>
    <!--start Mobile Menu area -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="#">{{__('language.Home')}}</a>
                                    <ul>
                                        <li><a href="">Home 2</a></li>
                                        <li><a href="">Home 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="">{{__('language.Clothings')}}</a>
                                    <ul>
                                        <li><a href="">{{__('language.Learning')}}</a>
                                            <ul>
                                                <li><a href="">{{__('language.Carnation')}}</a></li>
                                                <li><a href="">{{__('language.Daisy')}}</a></li>
                                                <li><a href="">{{__('language.Rose')}}</a></li>
                                                <li><a href="">{{__('language.Gladiolus')}}</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">{{__('language.Lighting')}}</a>
                                            <ul>
                                                <li><a href="">{{__('language.Carnation')}}</a></li>
                                                <li><a href="">{{__('language.Daisy')}}</a></li>
                                                <li><a href="">{{__('language.Rose')}}</a></li>
                                                <li><a href="">{{__('language.Gladiolus')}}</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">{{__('language.Living_Room')}}</a></li>
                                        <li><a href="">{{__('language.Lamp')}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="">{{__('language.Lookbook')}}</a>
                                    <ul>
                                        <li><a href="">{{__('language.Yellow_Rose')}}</a></li>
                                        <li><a href="">{{__('language.White_Rose')}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="">{{__('language.Blog')}}</a>
                                    <ul>
                                        <li><a href="">{{__('language.Single_Blog')}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="">{{__('language.Shop')}}</a>
                                    <ul>
                                        <li><a href="">{{__('language.Cart')}}</a></li>
                                        <li><a href="">{{__('language.Product')}}</a></li>
                                        <li><a href="">{{__('language.Checkout')}}</a></li>
                                        <li><a href="">{{__('language.My_Account')}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="">{{__('language.Pages')}}</a>
                                    <ul>
                                        <li><a href="">{{__('language.About_Us')}}</a></li>
                                        <li><a href="">{{__('language.Contact')}}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Mobile Menu area -->
</div>
