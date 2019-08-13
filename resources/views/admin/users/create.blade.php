@extends('layouts.admin')

@section('content')

<h1>Create User</h1>

<div class="card">
    <div class="card-header">
        Create Users
    </div>
    <!-- ./.card-header -->
    
    <form action="/admin/users" method="post" enctype="multipart/form-data">
        
      {{-- @csrf --}}
         {!! csrf_field() !!}
         

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
        </div>
        <!-- ./.form-group -->
        
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" name="email" class="form-control" placeholder="Enter Your E-mail">
        </div>
        <!-- ./.form-group -->
        
         <div class="form-group">
            <label for="role_id">Role:</label>
            <select name="role_id" id="role_id" class="form-control">
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div> 
        <!-- ./.form-group -->
        
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="is_active" id="status" class="form-control">
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
            <input type="submit" name="submit" class="form-control">
        </div>
        <!-- ./.form-group -->
    </form>
</div>
<!-- ./.card -->

@include('includes.form_error')


@stop