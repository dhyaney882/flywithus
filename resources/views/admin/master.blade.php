<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
 
      .form-control{
        width: 50% !important;
      }
    </style>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('plugins/chartist.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('plugins/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.min.css') }} " rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title></title>
        <style>
            body{
                font-size: 15px !important;
            }

              .topnav {
                  display: flex;
                  flex-direction: column;
    background-color: #333;
    height: 100vh;
    overflow: hidden;
  }
  

  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  

  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  

  .topnav a.active {
    background-color: aqua;
    color: white;
  }

</style>
    </head>
    <body>
        <div style="display: flex">
        <div class="col-md-2">
            <div class="topnav">
                <a class="active" href="/admin">Dashboard</a>
               
                <a href="/admin/users">Users</a>
                <a href="/admin/booking">Bookings</a>
                <a href="/admin/bookingconfirm">Bookings Confirmed</a>
                <a href="/admin/bookingcancel">Bookings Cancelled</a>
                <a href="/admin/flights">Flights</a>
                <a href="/"><button class="btn btn-primary">Back to home</button></a>
              </div>
        </div>
        <div class="col-md-10">
            <div class="admin-nav" style="background-color: #04AA6D;height:12vh;border-left:1px solid black ">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" style="height:40px;color: aliceblue;background-color: black;position: absolute; right:10; top: 10;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{asset('/images/users/image.png')}}" height="30px" width="30px" style="border-radius: 50%;border: 1px solid rgb(92, 92, 92);overflow: hidden;margin-right: 10px;"> {{Auth::user()->name}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="{{ url('/admin/profile') }}">Profile</a>
                      <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                    </div>
                  </div>
            </div>
            <div style="padding:30px;">
                @yield('contents')
            </div>
            
        </div>
        </div>
    </body>
</html>