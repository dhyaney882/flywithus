<?php 
use App\Models\Flight;
$data=Flight::all();
?>
@extends('main')
@section('home')


    @if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>@endif
    <div  style="width:100%; padding-bottom:10px"> 
        <img src="{{url('/images/cover.jpg')}}" alt="Image"style="height:80vh;width:100vw" />
        </div>
<div class="continer-fluid" style="padding: 5px">
    <div class="row">
        @foreach ($data as $item)
        <div style="margin-bottom:30px" class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="{{url('/images/plane.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">FlightNumber : {{$item->flightnumber}}</h5>
              <h5 class="card-title">Tickets :{{$item->tickets}}</h5>
              <h5 class="card-title">Source : {{$item->source}}</h5>
              <h5 class="card-title">Destination : {{$item->destination}}</h5>
              <h5 class="card-title">Date : {{$item->date}}</h5>
              <h5 class="card-title">Time : {{$item->time}}</h5>
              <h5 class="card-title">Price : {{$item->price}}</h5>
         <a href="{{url('flight/book/'.$item->id)}}" class="btn btn-primary">Book ticket</a>
         
            </div>
          </div>
        </div>
        @endforeach
        </div>
        </div>
</body>
</html>
@endsection