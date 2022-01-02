@extends('layouts.admin.admin')
@section('page-heading','Theme')
@section('content')
    <button type="button" class="btn btn-primary" style="margin-bottom: 15px" data-toggle="modal"
            data-target="#exampleModal">
        Add new theme
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="{{ route('theme.create') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new theme</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Theme</label>
                            <input type="text" class="form-control" name="theme" placeholder="Enter theme">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @forelse($themes as $key=>$theme)
        <div class="modal fade" id="EditModal{{ $theme->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="{{ route('theme.edit',$theme->id) }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" >Edit theme</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Theme</label>
                                <input type="text" class="form-control" name="theme" placeholder="Enter theme"
                                       value="{{ $theme->theme }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @empty
    @endforelse
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Theme List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                       style="text-align: center">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Theme</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($themes as $key=>$theme)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $theme->theme }}</td>
                            <td>
                                <a class="btn btn-danger" style="color: white"
                                   href="{{ route('theme.destroy',$theme->id) }}">Delete</a>

                                <button type="button" style="color: white"
                                   class="btn btn-primary" data-toggle="modal"
                                   data-target="#EditModal{{ $theme->id }}">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


