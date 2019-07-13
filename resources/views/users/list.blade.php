@extends('layouts.app')
@section('content')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/blog.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <table class="table table" style="font-size: 18px; background: #b5dbeb">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tác Giả</th>
                <th scope="col">Tổng các bài viết</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            @foreach($users as $key => $user)
            <tbody>
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$user->name}}</td>
                <td >{{count($user->posts)}}</td>
                <td><a href="{{route('users.authorpost',$user->id)}}">Xem Chi Tiet</a></td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
