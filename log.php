<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>       
</head>    
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form>    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="hidden" name="Pass" id="Pass" placeholder="Password" value="de26">    
        <br><br>    
        <input type="button" name="log" id="log" value="Login">       
           
           
    </form>     
</div>    
<?php
echo date("l") . "<br>";

echo date("l jS \of F Y h:i:s A");


?>
</body>    
</html> 