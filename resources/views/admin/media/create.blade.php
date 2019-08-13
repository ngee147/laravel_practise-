@extends('layouts.admin')

@section('style')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@endsection

@section('content')

<h1>Upload Media</h1>

<div class="row">
 <form class="dropzone" action="{{route('admin.media.store')}}" method="POST" enctype="multipart/form-data">
        
        {{ csrf_field() }}
      {{-- @csrf
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
        </div> --}}
        <!-- ./.form-group -->
    </form>
</div>


<div class="row">
    @include('includes.form_error')
</div>

    
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@stop