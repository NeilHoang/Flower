@extends('layouts.admin.admin')
@section('page-heading','Edit')
@section('content')

    <div class="col-8">
        <div class="row">
            <div class="col-12">
                <h1>Sửa Color</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('color.update',$colors->id)}}" >
                    @csrf
                    <div class="form-group">
                        <label>Tên Màu</label>
                        <input type="text" class="form-control" name="color" placeholder="Enter name color" required value="{{$colors->color}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>

@endsection
