@extends('layouts.app')
@section('content')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/blog.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <h2><span class="ion-minus"></span>Blog Posts<span class="ion-minus"></span></h2>
                    <strong>Từ coder đến developer - Blog cho mọi người </strong><br>
                </div>
            </div>
            @if(isset($posts))
                <h3>Tìm thấy {{count($posts)}} kết quả '{{$keyword}}'</h3>
            <div class="row">
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
                            <div class="card text-center">
                                <img class="card-img-top"
                                     src="{{$post->image}}"
                                     alt="" width="100%" height="250px">
                                <div class="card-block">
                                    <h4 class="card-title">Tiêu đề: {{$post->title}}</h4>
                                    <p class="card-text">Tác giả: {{$post->user}}</p>
                                    <p class="card-text">Thời gian: {{$post->created_at}}</p>
                                    <a class="btn btn-primary" href="{{route('posts.view',$post->id)}}">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection
