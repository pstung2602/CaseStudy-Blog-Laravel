@extends('admin.layouts')
@section('title')
    <h1 class="h2">Posts</h1>
@endsection
@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">User</th>
            <th scope="col">Image</th>
            <th scope="col">Created_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $key => $post)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->user}}</td>
                <td>{{$post->image}}</td>
                <td>{{$post->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
