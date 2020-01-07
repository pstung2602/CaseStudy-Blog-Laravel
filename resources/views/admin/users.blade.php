@extends('admin.layouts')
@section('title')
    <h1 class="h2">Users</h1>
@endsection
@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $user)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
