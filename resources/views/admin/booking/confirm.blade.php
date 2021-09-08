@extends('admin.master')

@section('contents')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div>
    <h3>Bookings Confirmed</h3>
    <table class="table" style="font-size: 0.8em">
        <tr>
            <th>Flight Number
            </th>
            <th>
                Username
            </th>
            <th>
                Address
            </th>
            <th>
                Required seat

            </th>
            <th>
                Contact
            </th>
            <th>
                Source
            </th>
            <th>
                Destination
            </th>
            <th>
                Date
            </th>
            <th>
                Time
            </th>
            
            
        </tr>
        @foreach ($booking as $data)
        <tr>
    <td>
            {{$data->flightnumber}}</td>
            <td>{{$data->username}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->required_seat}}</td>
            <td>{{$data->contact}}</td>
           <td>{{$data->source}}</td>
            <td>{{$data->destination}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->time}}</td>
    </tr>
    @endforeach
    @endsection