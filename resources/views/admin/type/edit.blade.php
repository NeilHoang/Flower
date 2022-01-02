@extends('layouts.admin.admin')
@section('page-heading','Edit TYpe')
@section('content')

    <div class="col-8">
        <div class="row">
            <div class="col-12">
                <h1>Sửa Color</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('type.update',$types->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="type" placeholder="Enter name type" required
                               value="{{$types->type}}">
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <select class="form-control" name="color_id">
                            @foreach($colors as $color)
                                <option value="{{ $color->id}}" @if($color->id == $types->color_id) selected @endif>{{$color->color}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>

@endsection
