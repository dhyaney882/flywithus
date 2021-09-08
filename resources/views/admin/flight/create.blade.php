
@extends('admin.master')

@section('contents')

@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
    <div class="container">
    <form class="form-horizontal" action="/admin/flights" method="POST" enctype='multipart/form-data'>
        @csrf
 
       <div class="form-group">
        <label for="exampleInputPassword1">Flight Number</label>
        <input type="text" class="form-control" id="exampleInputpassword1" name="flightnumber" required>

       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Tickets</label>
        <input type="text" class="form-control" id="exampleInputpassword1"  name="tickets" required>

       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Source</label>
        <input type="text" class="form-control" id="exampleInputpassword1" name="source" required>

       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Destination</label>
        <input type="text" class="form-control" id="exampleInputpassword1"  name="destination" required>

       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Date</label>
        <input type="date" class="form-control" id="exampleInputpassword1" name="date" required>

       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Time</label>
        <input type="time" class="form-control" id="exampleInputpassword1" name="time" required>

       </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" id="exampleInputpassword1" name="price" required>

       </div>
       

        
        <button class="btn btn-primary">Save</button>
    </form>
    </div>
</body>
</html>
@endsection