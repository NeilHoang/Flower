@extends('layouts.admin.admin')
@section('page-heading','EditRole')
@section('content')
    <form method="post" action="{{route('user.role',$user->id)}}">
        @csrf
    <div class="form-group">

        <label for="exampleFormControlSelect1">Role</label>
        <select class="form-control" name="role">
            <option value="1" @if($user->role == 1) selected @endif>Admin</option>
            <option value="2" @if($user->role == 2) selected @endif>User</option>
        </select>
    </div>
        <button type="submit" style="color: white"
                class="btn btn-primary">Edit</button>
    </form>
@endsection
