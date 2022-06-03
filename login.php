<?php
SESSION_START();
?>
<html lang="en">
  <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] && 
                  $_POST['password']) {
                
                  $_SESSION['username'];
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "enter the username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "enter your password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
			 <button class = "btn btn-lg btn-primary btn-block" type = "logout" 
               name = "logout">logout</button>  
         </form>
         
      </div> 
<?php
 $_SESSION("login")="successful";

if(isset ($_SESSION["login"]));
{
	ECHO"login";
}
?>
   </body>
</html>