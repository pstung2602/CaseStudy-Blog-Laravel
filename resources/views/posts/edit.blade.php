@extends('layouts.app')
@section('content')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/blog.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <h1 style="text-align: center">Sửa bài viết</h1>

    <form action="{{route('users.update',$post->id)}}" method="post">
        @csrf
        <div class="container">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}" >
            </div>
            <div class="form-group">
                <label >Content</label>
                <textarea class="form-control" cols="30" rows="10" name="content" >{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection