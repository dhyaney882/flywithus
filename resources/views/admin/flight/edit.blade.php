@extends('admin.master')

@section('contents')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
    <div class="container">
    <form action="/admin/flights/{{$posts->id}}" method="POST">
        @csrf
        @error('title')
        <div class="alert alert-danger">Please enter the title</div>
        @enderror
 
        Flight Number<input type="text" name="flightnumber" value="{{$posts->flightnumber}}"><br>
        Tickets<input type="text" name="tickets" value="{{$posts->tickets}}"><br>
        Source<input type="text" name="source" value="{{$posts->source}}"><br>
        destination<input type="text" name="destination" value="{{$posts->destination}}"><br>
        date<input type="text" name="date" value="{{$posts->date}}"><br>
        time<input type="text" name="time" value="{{$posts->time}}"><br>
        Price<input type="text" name="price" value="{{$posts->price}}"><br>
       
        <button class="btn btn-success">Edit</button>
    </form>
    </div>
</body>
</html>
@endsection
