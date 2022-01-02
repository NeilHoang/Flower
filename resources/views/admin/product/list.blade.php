@extends('layouts.admin.admin')
@section('page-heading','Products')
@section('content')

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>
                @forelse($products as $key=> $product)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                        <a href="{{route('product.delete',$product->id)}}" class="btn btn-danger"  onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Delete</a>
                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-dark" >Edit</a>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5"> No data</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>


@endsection
