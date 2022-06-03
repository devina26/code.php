<?php
session start();
$session("login")="successful";
?>

<?php
if(isset ($_SESSION["login"]));
{
	print_r"login";
}
?>