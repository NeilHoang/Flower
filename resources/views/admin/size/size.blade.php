@extends('layouts.admin.admin')
@section('page-heading','Size')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kích Cỡ Sản Phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                       style="text-align: center">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Size</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($sizes as $key => $size)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$size->size}}</td>
                            <td>
                                <a href="{{route('size.destroy',$size->id)}}" class="btn btn-danger"
                                   onclick="return confirm('bạn có chắc chắn muốn xóa không ?')">Delete</a>
                                <a href="{{route('size.edit',$size->id)}}" class="btn btn-secondary">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
