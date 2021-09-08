@extends('index')

@section('home')
    


<h1>List of flights</h1>
<form action="/searchflight"method="Post">@csrf <input type="search" name='searched'><button type="submit"->Search</button></form>
<div>
    <div>
        
        <table border='2px' class="table" >
            <tr>
                <th>Flightnumber</th>
                <th>Tickets</th>
                <th>source</th>
                <th>Destination<h1>
                <th>Date<h1>
                 <th>Time<h1>
                    <th>Price<h1>

                <th>Action</th>
            </tr>
            @foreach ($flight as $data)
            <tr>
                <td>{{$data->flightnumber}}</td>
                <td>{{$data->tickets}}</td>
                <td>{{$data->source}}</td>
                <td>{{$data->destination}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->price}}</td>
                <td><a href="/flight/book/{{$data->id}}"><button class="btn btn-primary">Book Ticket</button></a></td>
            </tr>
            @endforeach
        </table>
    
    </div>
    
    
</div>

@endsection