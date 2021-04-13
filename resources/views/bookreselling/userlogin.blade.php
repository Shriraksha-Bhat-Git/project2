<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href="{{ asset('css/userlogin.css') }}">    
</head>    
<body>    
       
    <div class="login">    
    <form id="login" method="get" > 
        <h2>User Login</h2><br>    
        <label><b>Email id:     
        </b>    
        </label>    
        <input type="text" name="Email" id="Email" placeholder="Enter Email id">    
        <br><br>    
        <label><b>Password:     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Enter Password">    
        <br><br>    
        <input type="button" name="log" id="log" value="Login" >
        <br><br>    
           
        <br><br>    
        New User??<a href="{{ url('/register') }}">Register Here</a>    
    </form>     
</div>    
</body>    
</html>     