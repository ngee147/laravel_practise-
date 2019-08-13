@extends('layouts.admin')

@section('content')

<h1>Categories</h1>





<form action="{{route('admin.categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
                
       {{ csrf_field() }}
       {{ method_field('PATCH') }}
            
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control"  placeholder="Name">
                </div>

                <div class="form-group">
                    <input type="submit" name="submit"  class="btn btn-primary">
                </div>

</form>

            
  <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST" enctype="multipart/form-data">
       {{ csrf_field() }}
       {{ method_field('DELETE') }}
        <div class="form-group">
            <input type="submit" name="Delete" class="btn btn-danger" value="Delete">
        </div>
   </form>



@stop