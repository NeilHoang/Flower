@extends('layouts.admin.admin')
@section('page-heading','Create TYpe')
@section('content')

    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới Type</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('type.store')}}" >
                    @csrf
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="type" placeholder="Enter name type" required>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <select class="form-control" name="color_id">
                            @foreach($colors as $color)
                                <option value="{{ $color->id}}">{{ $color->color }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>

@endsection
