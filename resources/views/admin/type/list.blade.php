@extends('layouts.admin.admin')
@section('page-heading','Type')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-outline-primary" href="{{route('type.create')}} ">Create</a>
                <table class="table table-bordered mt-3" style="text-align: center">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Color</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(count($types) == 0 )
                        <tr>
                            <td colspan="4" style="color: #cd0a0a">Không có dữ liệu</td>
                        </tr>
                    @else
                        @foreach($types as $key => $type)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$type->type}}</td>
                                <td>{{$type->color->color}}</td>
                                <td><a href="{{route('type.edit',$type->id)}}" class="btn btn-secondary">sửa</a><a
                                        href="{{route('type.destroy',$type->id)}}" class="btn btn-danger"
                                        onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
