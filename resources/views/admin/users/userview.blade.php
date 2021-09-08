@extends('admin.master')

@section('contents')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div>
    <h3>Users</h3>
    <form action="/admin/users/searchuser"method="Post">@csrf <input type="search" name='searched'><button type="submit"->Search</button></form>
    <table class="table" style="font-size: 0.8em">
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Modify
            </th>
        </tr>

        @foreach ($flight as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>
                <a href="/admin/users/edit/{{$data->id}}"><button class="btn btn-success">Edit</button></a>
                <a href="/admin/users/delete/{{$data->id}}"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection