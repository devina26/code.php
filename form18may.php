<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=<?php echo $_SERVER['PHP_SELF']?> method= POST>
     Name:<input type="text" name ="fname"><BR><BR>
     RollNo:<input type="text" name="roll"><BR><BR>
     <input type="submit" name="submit">
    </html>
    <?php
    if(isset($_REQUEST['submit']))
    {

        echo $_REQUEST['fname'];
        echo $_REQUEST['roll'];
    }
    
    SESSION_START();
   $_SESSION("login")="successful";

if(isset ($_SESSION["login"]));
{
	ECHO"login";
}
SESSION_UNSET();
SESSION_DESTROY();
ECHO"SUCCESSFULLY DELETE";
?>
    </form>
    
</body>