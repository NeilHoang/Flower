@extends('layouts.shop.master')
@section('content')
    <!--Start Register & login area -->
    <div class="my_account_page_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="create_account">
                        <h2>Login or Create an Account</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="new_customer">
                            <h3>NEW CUSTOMERS</h3>
                            <p>If you don't have an account with us, please register</p>
                            <ul class="register_form">
                                <li>Name<span></span></li>
                                <li>
                                    <div class="form-group">
                                        <input id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </li>
                                <li>Email<span></span></li>
                                <li>
                                    <div class="form-group">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </li>
                                <li>Password<span></span></li>
                                <li>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password"/>
                                    </div>
                                </li>
                                <li>Password Confirmation<span></span></li>
                                <li>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password_confirmation"/>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="create_button_area">
                            <button type="submit" class="create_button">
                                Create an Account
                            </button>
                        </div>
                    </div>
                </form>
                <form class="user" method="post" action="{{route('login')}}">
                    @csrf
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="new_customer">
                            <h3>Login Customers</h3>
                            <p>If you have an account with us, please log in.</p>
                            <ul class="register_form">
                                <li>Email Address<span></span></li>
                                <li>
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" required/>
                                        @if($errors->has('email'))
                                            {{$errors->first('email')}}
                                        @endif
                                    </div>
                                </li>
                                <li>Password<span></span></li>
                                <li>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password" required/>
                                        @if($errors->has('password'))
                                            {{$errors->first('password')}}
                                        @endif
                                    </div>
                                </li>
                                <a href="{{ url('auth/google') }}" class="btn btn-primary"><i
                                        class="fa fa-google"></i> Google</a>
                                <a href="{{ url('auth/facebook') }}" class="btn btn-primary"><i
                                        class="fa fa-facebook"></i> Facebook</a>
                            </ul>
                        </div>
                        <div class="create_button_area">
                            <a href="">Forgot Your Password?</a>
                            <button type="submit" class="create_button">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <!--End Register & login area -->
@endsection
