@extends('layouts.admin.admin')
@section('page-heading','Create Color')
@section('content')

    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới Color</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('color.store')}}" >
                    @csrf
                    <div class="form-group">
                        <label>Tên Màu</label>
                        <input type="text" class="form-control" name="color" placeholder="Enter name color" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>

@endsection
