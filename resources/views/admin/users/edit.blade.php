@extends('layouts.admin')
 
@section('content')
 
<h1>Edit User</h1>
 
<div class="row">
 
    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>
 
 
    <div class="col-sm-9">
    <!-- ./.card-header -->
 
    <form method="POST" action="{{route('admin.users.update', $user->id)}}" enctype="multipart/form-data">
 
      {{-- @csrf --}}
       {{ csrf_field() }}
       {{ method_field('PATCH') }}
 
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control" placeholder="Enter Your Name">
        </div>
        <!-- ./.form-group -->
 
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="Enter Your E-mail">
        </div>
        <!-- ./.form-group -->
 
         <div class="form-group">
            <label for="role_id">Role:</label>
            <select name="role_id" id="role_id" class="form-control">
                @foreach($roles as $role)
                    @if($role->id == $user->role_id)
                        <option value="{{$role->id}} "selected>{{$role->name}}</option>
                    @else
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <!-- ./.form-group -->
 
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="is_active" id="status" value="{{$user->is_active}}" class="form-control">
                <option value="1">Active</option>
                <option value="0" selected>Not Active</option>
            </select>
        </div>
        <!-- ./.form-group -->
 
        <div class="form-group">
            <label for="file">Photo:</label>
            <input type="file" name="photo_id" id="password" class="form-control" placeholder="Enter Your Password">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
        </div>
        <!-- ./.form-group -->
 
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
        <!-- ./.form-group -->
 
    </form>
 
      <form action="{{route('admin.users.destroy', $user->id)}}" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
       {{ method_field('DELETE') }}
        <div class="form-group">
            <input type="submit" name="Delete" class="btn btn-danger" value="Delete">
        </div>
       </form>
 
   </div>
</div>
<!-- ./.card -->
 
<div class="row">
    @include('includes.form_error')
</div>
 
 
@stop