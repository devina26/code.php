<?php
$servername ="localhost";
$username ="root";
$password ="";
$db="tecnia";
//create connection
$conn = new mysqli($servername,$username,$password,$db);
//check connection
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}
echo "Connected successfully"."<br>";

$sql="delete from student where rollno=5";
 if ($conn->query($sql)===TRUE)
 {
	 echo"record deleted";
 }
 else
	 echo"unsuccessfull".$conn->error;
 	 
$conn->close();// closing the connection.

?>