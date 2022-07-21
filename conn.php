<?php
$servername ="localhost";
$username ="root";
$password ="";
$db="tecnia";
// Create connection
$conn = new mysqli($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}
echo "Connected successfully"."<br>";
/*
 $sql="create database tecnia1";
 if ($conn->query($sql)===TRUE)
 {
	 echo"database created";
 }
 else
	 echo"unsuccessfully".$conn->error;
 
  $sql="create table student(rollno int(4),
                             name varchar(10),
							 address varchar(10))";
 if ($conn->query($sql)===TRUE)
 {
	 echo"table created";
 }
 else
	 echo"unsuccessfully".$conn->error;*/
 
$sql="insert into student (rollno, name, address) values(6,'siddhant','delhi')";

 if ($conn->query($sql)===TRUE)
 {
	 echo"record inserted";
 }
 else
	 echo"unsuccessfully".$conn->error;
 
 $conn->close();// closing the connection.
?>