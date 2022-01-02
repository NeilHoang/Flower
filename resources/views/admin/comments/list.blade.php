@extends('layouts.admin.admin')
@section('page-heading','Comments')
@section('content')

    <div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Comment</th>
                <th scope="col">Post</th>
                <th scope="col">User</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $key=> $comment)
                <tr>
                    <td>{{++$key}}</td>
                    <td scope="row">
                        {!! $comment->comment !!}
                    </td>
                    <td>{{$comment->post->title}}</td>
                    <td>{{$comment->user->name}}</td>
                    <td>
                        <a href="{{route('comment.delete',$comment->id)}}" class="btn btn-danger"  onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Delete</a>
                        <a href="{{route('comment.edit',$comment->id)}}" class="btn btn-dark" >Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
