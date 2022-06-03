<?php
$cookie_name="user";
$cookie_value="google";
setcookie($cookie_name,$cookie_value,time()+(86400),"/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=method=POST echo $_SERVER['PHP_SELF']?>
     Name<input type="text" name ="fname"><br>
     RollNo<input type="text" name="roll"><br>
     <input type="submit" name="submit"><br>

    <?php
    if(isset($_POST['SAVE']))
    {

        echo $_POST['Name'];
        echo $_POST['RollNo'];
    }
	if(!isset($_COOKIE[$cookie_name]))
{
echo"cookie is not set";
}
else
	echo$_COOKIE[$cookie_name];
?>
 

    </form>
</body>
</html>