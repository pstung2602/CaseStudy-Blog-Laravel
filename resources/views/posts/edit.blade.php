@extends('layouts.app')
@section('content')
    <h1 style="text-align: center">Sửa bài viết</h1>

    <form action="{{route('users.update',$post->id)}}" method="post">
        @csrf
        <div class="container">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}" >
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" name="image" value="{{$post->image}}" >
            </div>
            <div class="form-group">
                <label >Content</label>
                <textarea class="form-control" cols="30" rows="10" name="content" >{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
