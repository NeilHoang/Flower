@extends('layouts.shop.master')
@section('content')


    <div class="blog_post_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    @include('layouts.shop.weather')
                    <div class="blog_right_sidebar">
                        <h2 class="sp_module_title"><span>Newsletter</span></h2>
                        <div class="sub_area">
                            <form action="#">
                                <input type="text" placeholder="E-mail">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                        <div class="latest_posts">
                            <h3 class="sp_module_title sp_module_title_rv"><span>{{__('language.Latest_Posts')}}</span></h3>

                            @foreach($lastestPosts as $lastpost)
                                <div class="single_l_post">
                                    <a class="show_a_post" href="{{route('singleBlog',$lastpost->id)}}">{{$lastpost->title}}</a>
                                    <p>{{$lastpost->created_at}}</p>
                                </div>
                            @endforeach

                        </div>
                        <div class="add_r_sidebar">
                            <p class="banner_block"><a href="#"><img alt="" src="{{asset('img/banner/3.jpg')}}"></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single blog_top_area">
                        <ul id="breadcrumbs">
                            <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                            <li><span>Ι</span></li>
                            <li>Blog</li>
                            <li><span>Ι</span></li>
                            <li>{{$post->title}}</li>
                        </ul>
                    </div>
                    <div class="single_blog_area">
                        <img src="{{asset('storage/images/posts/'.$post->image)}}" alt=""/>
                    </div>
                    <div class="blog_details_area">
                        <i class="fa fa-picture-o"></i>
                        <div class="blog_details_list">
                            <ul class="blog_author">
                                <li><i class="fa fa-folder-open-o"></i> <a href="">blog</a></li>
                                <li><i class="fa fa-user"></i> {{$post->user->name}}</li>
                                <li><i class="fa fa-eye"></i> Hits: 256</li>
                                <li>
                                    <div class="star_blog">
                                        Rating:
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog_info_details">
                            <h2><a class="blog_info_heading" href="#">{{$post->title}}</a></h2>
                            <p>{!! $post->description !!}</p>
                            {!! $post->content !!}
                        </div>
                    </div>

                    <div class="blog_social_icon">
                        <img src="{{asset('img/social/shareicon.png')}}" alt=""/>
                    </div>
                    <div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col"><h4>Bình Luận</h4></th>
                            </tr>
                            </thead>
                            <tbody id="list-comments">
                            @foreach($comments as $comment)
                                <tr>
                                    <td scope="row">
                                        <i>{{$comment->user->name}}:</i>
                                        {!! $comment->comment !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="blog_add_comment_area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="comment_text">
                                    <h2>Add comment</h2>
                                </div>
                            </div>
                            <form method="post" id="send_comment" action="{{route('comment.store')}}">
                                @csrf

                                <div class="col-lg-12">
                                    <input type="text" name="post_id" id="post_id" value="{{$post->id}}" hidden>
                                    <div class="comment_textarea">
                                        <textarea cols="65" rows="8" name="comment" id="post_comment" class="post_comment ckeditor" required></textarea>
                                        <div class="comment_error">

                                            @if($errors->has('comment'))
                                                {{$errors->first('comment')}}
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="send_button">
                                        <a type="button"  id="send_a_comment" class="send_a_comment btn btn-primary"
                                                @auth
                                                @else
                                                onclick="return confirm('Bạn cần đăng nhập để bình luận.')"
                                                href="{{route('showLogin')}}"
                                            @endauth >Send
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection








