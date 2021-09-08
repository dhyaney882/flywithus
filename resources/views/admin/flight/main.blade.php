@extends('admin.master')

@section('contents')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form action="/admin/searchflight"method="Post">@csrf <input type="search" name='searched'><button type="submit"->Search</button></form>

<table class="table">
<tr>
    <th>ID</th>
    <th>Flight Number</th>
    <th>Tickets</th>
    <th>Source</th>
    <th>Destination</th>
    <th>Date</th>
    <th>Time</th>
    <th>Price</th>
    <th colspan="3">Actions</th>
</tr>
@foreach ($flights as $post )
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->flightnumber}}</td>
        <td>{{$post->tickets}}</td>
        <td>{{$post->source}}</td>
        <td>{{$post->destination}}</td>
        <td>{{$post->date}}</td>
        <td>{{$post->time}}</td>
        <td>{{$post->price}}</td>
        <td><a href="/admin/flights/{{$post->id}}/edit"><button class="btn btn-primary">Edit</button></a></td>
        <form method="POST" action="/admin/flights/{{$post->id}}">
        @csrf
        @method('delete')
        <td><input class="btn btn-danger" type="submit" value="Delete"></td>
        </form>
        
 
    </tr>
@endforeach
 
</table>
<a href="/admin/flights/create" class="btn btn-success" >Add New Flight</a>

</body>
</html>
@endsection