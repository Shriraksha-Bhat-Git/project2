<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

<div class="bg-img">
  <div class="container">
    <div class="topnav">
      <a href="{{ url('/home') }}"><i class="fa fa-fw fa-home"></i>Home</a>
       <a href="{{ url('/userlogin') }}"><i class="fa fa-fw fa-users"></i>User Login</a> 
      <a href="{{ url('/admin') }}"><i class="fa fa-fw fa-user"></i>Admin Login</a> 
      <!-- <a href="#login" class="right"><i class="fa fa-fw fa-user"></i>User Login</a>
      <a href="#login" class="right"><i class="fa fa-fw fa-user"></i>Admin Login</a> -->
    </div>
    
    <div class="content">
        <h2>Second Hand Book Reselling</h2>
    </div>
    
  </div>
</div>

</body>
</html>
