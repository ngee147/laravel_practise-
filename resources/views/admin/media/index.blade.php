@extends('layouts.admin')

@section('content')

<h1>Media</h1>

@if($photos)

<table class="table">
    <thead>
        <th>Id</th>
        <th>Name</th>        
        <th>Created date</th>
    </thead>
    <tbody>
        @foreach ($photos as $photo)
        <tr>
            <td>{{$photo->id}}</td>
            <td><img height="50" src="{{$photo->file}}" alt=""></td>
            <td>{{$photo->created_at? $photo->created_at : "no date"}}</td>
            {{-- <td>{{$photo->file ? $photo->file : "No image"}}</td> --}}
            <td>
                <form action="{{route('admin.media.destroy', $photo->id)}}" method="POST">
                     {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="form-group">
                        <input type="submit" name="Delete" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
      
    </tbody>
</table>

@endif

@stop