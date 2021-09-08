@extends('admin.master')
@section('contents')
    

    <form action="{{url('admin/users/edituserinfo/'.$user->id)}}" method="POST">

      @csrf

        <div class="form-group">

          <label for="text">username:</label>

          <input type="text" name="name" class="form-control" id="name" value={{$user->name}}>

        </div>

        <div class="form-group">

          <label for="pwd">email:</label>

          <input type="text" name="email" class="form-control" id="pwd" value="{{$user->email}}">

        </div>
​
    <div class="field">
<div class="control">
<label>Role:</label>
        @if($user->role == 2)
<label class="radio">
<input type="radio"name="role"value="2" checked>
            Admin
</label>
<label class="radio">
<input type="radio"name="role"value="1">
            Normal User
</label>
        @endif

    @if($user->role == 1)
<label class="radio">
<input type="radio"name="role"value="2">
            Admin
</label>

<label class="radio">
<input type="radio"name="role"value="1"checked="checked">
            Normal User
</label>
        @endif
</div>
</div>


        <button style="margin-top: 10;" class="btn btn-success">
          Update
        </button>
      </form>
          
      @endsection
