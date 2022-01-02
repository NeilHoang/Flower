@extends('layouts.admin.admin')
@section('page-heading','Post')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @forelse($posts as $key =>$post)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>
                                <a href="{{route('post.delete',$post->id)}}" class="btn btn-danger"  onclick="return confirm('Bạn có chắc chắn muốn xóa bài này không?')">Delete</a>
                                <a href="{{route('post.edit',$post->id)}}" class="btn btn-dark" >Edit</a>
                            </td>
                    </tr>
                    @empty
                        <td colspan="4"> No data</td>
                    @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
