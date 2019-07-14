@extends('layouts.app')
@section('content')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/blog.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <h1 style="text-align: center">Viết bài mới</h1>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <div class="container">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" >
            @if($errors->has('title'))
                <p class="text-danger">{{$errors->first('title')}}</p>
            @endif
        </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" name="image" >
                @if($errors->has('image'))
                    <p class="text-danger">{{$errors->first('image')}}</p>
                @endif
            </div>
        <div class="form-group">
            <label >Content</label>
            <textarea class="form-control" cols="30" rows="10" name="content"></textarea>
            @if($errors->has('content'))
                <p class="text-danger">{{$errors->first('content')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
