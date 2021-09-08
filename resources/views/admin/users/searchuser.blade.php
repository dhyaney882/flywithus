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

                 <th>Name</th>

                 <th>Email</th>

                 <th>Action</th>



             </tr>



             @foreach($data as $user)

                <tr>

                    <td>{{$user->name}}</td>

                    <td>{{$user->email}}</td>

                    <td>

                        

                        

                            <a href="{{url('admin/users/edit/'.$user->id)}}" class="btn btn-primary">Edit </a>

                            <a href="{{url('admin/users/delete/'.$user->id)}}" class="btn btn-danger">Delete</a>

                           




                    </td>

                    <!-- <td><a href="{{url('admin/user/delete-user/'.$user->id)}}" class="btn btn-default">

                        Delete

                    </a></td> -->

                </tr>

             @endforeach




         </table>

        <!--  <p>Red background </p> -->

</div>

 @stop