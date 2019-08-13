@extends('layouts.admin')

@section('content')

<h1>Create Post</h1>

<div class="row">
 <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
        
      {{-- @csrf --}}
         {!! csrf_field() !!}
         
        <div class="form-group">
            <label for="name">Title:</label>
            <input type="text" name="title" class="form-control"  placeholder="Title">
        </div>
        <!-- ./.form-group -->
        
        <div class="form-group">
            <label for="email">Category_ID:</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <!-- ./.form-group -->

        <div class="form-group">
            <label for="file">Photo:</label>
            <input type="file" name="photo_id" class="form-control">
        </div>
        <!-- ./.form-group -->

        <div class="form-group">
            <label for="password">Body:</label>
            <textarea type="text" name="body" class="form-control" placeholder="Comment"></textarea>
        </div>
        <!-- ./.form-group -->
        
        <div class="form-group">
            <input type="submit" name="submit" class="form-control">
        </div>
        <!-- ./.form-group -->
    </form>
</div>


<div class="row">
    @include('includes.form_error')
</div>

    
@endsection