<?php
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];

$servername="localhost";
$username="root";
$password="";
$database="bca";

$connection=new mysqli($servername,$username,$password,$database);

if($connection->connect_error)
{
	die("connection failed: ".$connection->connect_error);
}
if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE)
{
	print"email is invalid";
}
elseif(filter_var($age,FILTER_VALIDATE_INT)===FALSE)
{
	print"age is invalid";
}
else
{
	$sql="insert into emailSignup(name,age,email) values('$name','$age','$email')";
	if($connection->query($sql)===TRUE)
	{
		echo"SUBMISSION SUCCESSFUL";
	}
else
{
	echo"Error: " .$sql."<br>".$connection->error;
}	
}
$connection->close();
?>
