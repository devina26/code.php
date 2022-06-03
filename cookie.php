<?php
echo"devina dugar"."<br>"."demonstrating cookies:"."<br>"; 
$cookie_name="user";
$cookie_value="google";
setcookie($cookie_name,$cookie_value,time()+(86400),"/");
// to delete the cookie use -, to create use + in time function
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name]))
{
echo"cookie is not set";
}
else
	echo$_COOKIE[$cookie_name];
?>
</body>
</html>