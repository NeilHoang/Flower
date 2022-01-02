@extends('layouts.admin.admin')
@section('page-heading','Edit Post')
@section('content')

<div class="container">

    <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control"  name="title" value="{{$post->title}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" class="form-control"  name="description" value="{{$post->description}}">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control ckeditor" name="content" id="content" rows="15">{!! $post->content !!}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>

    </form>
</div>


@endsection
