@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_post'))
    <p class="bg-danger">{{session('deleted_post')}}</p>
@endif

<h1>Post</h1>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
             <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Cratedat</th>
            <th>Updated at</th>
        </tr>
    </thead>
    <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="100px" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/50x50'}}" alt=""></td>
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category ? $post->category->name : 'No Categorized'}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{str_limit($post->body, 7)}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>


    
@endsection