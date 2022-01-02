@extends('layouts.admin.admin')
@section('page-heading','Edit Comment')
@section('content')
    <form method="post" action="{{route('comment.update',$comment->id)}}">
        @csrf
        <div class="col-lg-12">
            <div class="comment_textarea">
                <textarea cols="65" rows="8" name="comment" class="ckeditor">{!!  $comment->comment!!}</textarea>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="send_button">
                <button type="submit" class="btn btn-dark">Send</button>
            </div>
        </div>
    </form>

@endsection
