<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">    
</head>    
<body>    
       
    <div class="login">    
    <form id="login" method="get" > 
        <h2>Admin Login</h2><br>    
        <label><b>Admin id:     
        </b>    
        </label>    
        <input type="text" name="Admin" id="Admin" placeholder="Enter Admin id">    
        <br><br>    
        <label><b>Password:     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Enter Password">    
        <br><br>    
        <a href="{{ url('/a-viewbooks') }}"><input type="button" name="log" id="log" value="Login"></a>
        <br><br>       
    </form>     
</div>    
</body>    
</html>     