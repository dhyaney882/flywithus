@extends('index')

@section('home')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if(Route::has('login'))
@auth
<div>
    <table class="table" style="font-size: 0.8em">
        <tr>
            <th>
                required seat

            </th>
            <th>
                source
            </th>
            <th>
                destination
            </th>
            <th>
                date
            </th>
            <th>
                time
            </th>
            <th>
                Status
            </th>
        </tr>
        
        @foreach ($mybooking as $item)
        <tr>
            <td>{{$item->required_seat}}</td>
            <td>{{$item->source}}</td>
            <td>{{$item->destination}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->time}}</td>
            <td>{{$item->status}}</td>
            @if($item['status']=='unconfirmed')
            <td><form action="booking/cancel/{{$item->id}}" method="POST">@csrf <button class="btn btn-danger">Cancel</button></form></td>
            @elseif($item['status']=='confirmed')
            <td><span style="color:green">Booking Confirmed</span></td>
            @elseif($item['status']=='canceled')
           <td> <span style="color:red">Sorry Ticket Canceled!!</span></td>
            @endif
        </tr>
       
        @endforeach
    </table>
</div>
@endif
@endauth
@endsection