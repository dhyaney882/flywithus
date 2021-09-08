@extends('admin.master')

@section('contents')

<div class="container">

        @if (session('error'))

            <div class="alert alert-danger">

                {{ session('errors') }}

            </div>

        @endif



        @if (session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif

         <h2 style="color:skyblue">Search result </h2>



         <table border="1px" class="table">

             <tr>

                 <th>Flightnumber</th>

                 <th>Tickets</th>

                 <th>Source</th>
                 <th>Destination</th>

                 <th>Date</th>

                 <th>Time</th>
                 <th>Price</th> 
                  <th>Actions</th>




             </tr>



             @foreach($data as $flight)

                <tr>

                    <td>{{$flight->flightnumber}}</td>
                    <td>{{$flight->tickets}}</td>
                    <td>{{$flight->source}}</td>
                    <td>{{$flight->destiantion}}</td>
                    <td>{{$flight->date}}</td>
                    <td>{{$flight->time}}</td>
                    <td>{{$flight->price}}</td>

                   

                    <td>

                        

                        

                            <a href="{{url('admin/flights/edit/'.$flight->id)}}" class="btn btn-primary">Edit </a>

                            <a href="{{url('admin/flights/delete/'.$flight->id)}}" class="btn btn-danger">Delete</a>

                           




                    </td>

                    <!-- <td><a href="{{url('admin/user/delete-user/'.$flight->id)}}" class="btn btn-default">

                        Delete

                    </a></td> -->

                </tr>

             @endforeach




         </table>

        <!--  <p>Red background </p> -->

</div>

 @stop