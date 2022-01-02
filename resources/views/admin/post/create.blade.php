@extends('layouts.admin.admin')
@section('page-heading','Create Post')
@section('content')

<div class="container">
    @if(\Illuminate\Support\Facades\Session::has('succes'))
        {{ \Illuminate\Support\Facades\Session::get('succes')}}
    @endif
    <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control"  name="title">
            @if($errors->has('title'))
                {{$errors->first('title')}}
            @endif
        </div>
        <div>
            <label>Description</label>
            <input type="text" class="form-control"  name="description">
            @if($errors->has('description'))
                {{$errors->first('description')}}
            @endif
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control-file" name="image">
            @if($errors->has('image'))
                {{$errors->first('image')}}
            @endif
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control ckeditor" name="content" id="content" rows="15"></textarea>
            @if($errors->has('content'))
                {{$errors->first('content')}}
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>

    </form>
</div>


@endsection
