@extends('layouts.shop.master')
@section('content')
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


    <div class="shopping_cart_area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mt-2 border">
                    <div class="cart_title">
                        <h2>{{__('language.Shopping_Cart')}}</h2>
                    </div>
                    <div class="shopping-cart-table">
                        <table class="cart_items">
                            <tr>
                                <th>{{__("language.Image")}}</th>
                                <th>{{__('language.Product_Name')}}</th>
                                <th>{{__('language.Price')}}</th>
                                <th>{{__('language.Quantity')}}</th>
                                <th>{{__('language.Subtotal')}}</th>
                                <th></th>
                            </tr>
                            @if(Session::has('cart'))
                                @forelse($cart->items as $product)
                                    <tr>
                                        <td><a href="{{ route('shop.index',$product['item']->id) }}"><img
                                                    src="{{asset('storage/images/products/'. $product['item']->image) }}"
                                                    alt="" style="width: 200px;height: 200px"/></a></td>
                                        <td><a href="{{ route('shop.index',$product['item']->id) }}">{{ $product['item']->name }}</a></td>
                                        <td><a href="#">{{ '$' . $product['item']->price }}</a></td>
                                        <form action="{{ route('cart.updateProductIntoCart', $product['item']->id) }}"
                                              method="post">
                                            @csrf
                                            <td data-th="Quantity">
                                                <input type="number" class="form-control text-center"
                                                       style="width: 100%" min="0" name="qty"
                                                       value="{{ $product['qty'] }}">
                                            </td>
                                            <td data-th="Subtotal" class="text-center">{{ $product['price']  }}</td>
                                            <td class="actions" data-th="">
                                                <button class="btn btn-info  btn-sm" type="submit"><i
                                                        class="fa fa-refresh fa-2x"></i></button>
                                                <a class="btn btn-danger btn-sm"
                                                   href="{{ route('cart.removeProductIntoCart', $product['item']->id) }}"><i
                                                        class="fa fa-trash-o fa-2x"></i></a>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center" style="color: deeppink"><p> "Bạn chưa mua sản phẩm nào" </p></td>
                                    </tr>
                                @endforelse
                                <tr class="visible-xs">
                                    <td class="text-center"><strong>{{__('language.Total_money')}}:
                                            ${{ $cart->totalPrice }}</strong></td>
                                </tr>
                                <tfoot>

                                <tr>
                                    <td><a href="{{ url('/') }}" class="btn btn-warning"><i
                                                class="fa fa-angle-left"></i>{{__('language.Continue_Shopping')}}</a>
                                    </td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-lg"></td>
                                    <td></td>
                                    <td class="hidden-xs text-center"><strong>{{__('language.Total_money')}}:
                                            ${{ $cart->totalPrice }}</strong></td>
                                    <td><a href="#" class="btn btn-success btn-block">{{__('language.Checkout')}}<i
                                                class="fa fa-angle-right"></i></a></td>
                                </tr>
                                </tfoot>
                            @else
                                <tr>
                                    <td colspan="5" class="text-center" style="color: deeppink"><p> "Bạn chưa mua sản phẩm nào" </p></td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

