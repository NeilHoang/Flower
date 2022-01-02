@extends('layouts.admin.admin')
@section('page-heading','Create')
@section('content')
    <div class="col-12" style="max-width: 50%">
        <form method="POST" action="{{route('size.store')}}">
            @csrf
            <div class="form-group">
                <label>Size</label>
                <input type="text" class="form-control" name="size">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
