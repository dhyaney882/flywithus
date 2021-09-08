<?php 
$user=auth()->user();
?>
<html lang="en">
<head>
  <style>
    .social-part .fa{
    padding-right:20px;
}
ul li a{
    margin-right: 20px;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
</head>
  <body>

    <nav style="height:70px; margin-bottom:0px; border-radius:0px;" class="navbar navbar-expand-sm  navbar-dark bg-dark   ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
           
          <li class="nav-item">
            <a class="nav-link" href="/aboutus">About Us</a>
          </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/flight">Flights</a>
  
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/mybookings">myBookings</a>

</li>
@if ($user==NULL)
  @elseif ($user['role']=='2')
  <li class="nav-item">
    <a class="nav-link" href="/admin">Admin</a>

</li>
@endif
</ul>
        
        <ul style="float: right">
          @if(Auth::User())
          <li style="margin-top:20px;display:flex" class="nav-item">
            <a class="nav-link" style="text-decoration: none;color:green;" href="/"><?php 
              print($user->name)
              ?></a>
              
                <a class="nav-link" style="text-decoration: none;background-color: rgb(255, 43, 43) !important" href="/logout">Logout</a>
              
          </li>
      @else

            <li style="margin-top:20px;list-style-type:none" class="nav-item">
              <a class="nav-link" style="text-decoration: none;background-color:skyblue;" href="/login">Login</a>
            </li>
          </ul>
          @endif
        </div>
      </nav>
         
        </div>
      </nav>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    })
});


</script>
</body>
</html>
