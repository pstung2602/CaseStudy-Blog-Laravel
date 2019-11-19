@extends('layouts.app')
@section('content')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/blog.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <h2 style="text-align: center;color: #9F224E;">{{$post->title}}</h2>
        <strong>{{$post->created_at}}</strong><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>{{$post->content}}</span><br>
        <img src="{{$post->image}}" width="40%" height="40%" style="margin-left: 330px">
        <h4 style="text-align: right; ">{{$post->user}}</h4>
        <p style="background: #eaeaea; color: #9d234c;">Ý kiến bạn đọc ({{count($comments)}})</p>
        @foreach($comments as $comment)
            <span>{{$comment->comment}}</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>{{$comment->user}} - {{$comment->created_at}}</span><br>
            <hr width="50%">
        @endforeach

        <form action="{{route('posts.comment',$post->id)}}" method="POST">
            @csrf
            <textarea name="comment" cols="136" rows="5" placeholder="Ý kiến của bạn"></textarea>
            Vui long <a href="{{ route('login') }}">dang nhap</a> hoac <a href="{{ route('register') }}">dang ki </a> de binh luan
            <button type="submit" style="margin-left:1045px; padding: 8px 24px;background: #9F224E;
    color: #fff !important;">Gui
            </button>
        </form>
    </div>
@endsection
