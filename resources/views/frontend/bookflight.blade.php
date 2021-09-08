@extends('main')
@section('home')
    

<div style="padding:40px">
      
<form action="/book" class="form-horizontal" method="POST">

  @csrf
    <div class="form-group">
      <input type="number" name='flight_id' value='{{$flight->id}}' hidden>
      <label for="text">Name</label>

      <input type="text" name="username" class="form-control inputwidth" id="email" value="{{Auth::user()->name}}" readonly>

    </div>
    <div class="form-group">

      <label for="pwd">FlightNumber:</label>

      <input type="text" name="flightnumber" class="form-control inputwidth" id="pwd" value='{{$flight->flightnumber}}'>

    </div>

    <div class="form-group">

      <label for="pwd">Address:</label>

      <input type="text" name="address" class="form-control inputwidth" id="pwd">

    </div>

    <div class="form-group">

        <label for="pwd">Source:</label>

        <input type="text" name="source" class="form-control inputwidth" value='{{$flight->source}}'>

      </div>

      <div class="form-group">

        <label for="pwd">Destination:</label>

        <input type="text" name="destination" class="form-control inputwidth" value='{{$flight->destination}}'>

      </div>
      <div class="form-group">

        <label for="pwd">Date:</label>

        <input type="date" name="date" class="form-control inputwidth"  value='{{$flight->date}}'>

      </div>
      
      <div class="form-group">

        <label for="pwd">Time:</label>

        <input type="text" name="time" class="form-control inputwidth" value='{{$flight->time}}'>

      </div>
      <div class="form-group">

        <label for="pwd">Contact:</label>

        <input type="number" name="contact" class="form-control inputwidth" id="pwd" maxlength="10" minlength="10">

      </div>
      <div class="form-group">

        <label for="pwd">Required Seat:</label>

        <input type="number" name="required_seat" class="form-control" id="pwd">

      </div>
      <input type="number" name="user_id" value="{{Auth::user()->id}}" class="form-control" id="pwd" hidden>
    <button class="btn btn-success">Submit</button>

  </form>
</div>

@endsection