@extends('layouts.admin')

@section('content')

<h1>Edit Post</h1>

<div class="row">

    <div class="col-sm-3">
        <img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">

        <form action="{{route('admin.posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                
            {{-- @csrf --}}
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            
                <div class="form-group">
                    <label for="name">Title:</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control"  placeholder="Title">
                </div>
                <!-- ./.form-group -->
                
                <div class="form-group">
                    <label for="email">Category ID:</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            @if($category->id == $post->category_id)
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <!-- ./.form-group -->

                {{-- <div class="form-group">
                    <label for="file">Photo:</label>
                    <input type="file" name="photo_id" class="form-control">
                </div> --}}
                <!-- ./.form-group -->

                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea type="text" name="body" class="form-control" placeholder="Comment">{{$post->body}}</textarea>
                </div>
                <!-- ./.form-group -->
                
                <div class="form-group">
                    <input type="submit" name="submit"  class="btn btn-primary">
                </div>
                <!-- ./.form-group -->
            </form>

       <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
       {{ method_field('DELETE') }}
        <div class="form-group">
            <input type="submit" name="Delete" class="btn btn-danger" value="Delete">
        </div>
       </form>
       
    </div>
 
</div>


<div class="row">
    @include('includes.form_error')
</div>

    
@endsection