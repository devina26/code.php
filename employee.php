<?php
$servername ="localhost";
$username ="root";
$password ="";
$db="tecnia";
// Create connection
$conn= mysqli_connect($servername,$username,$password,$db);

// Check connection
if (!$conn) {
  echo "failed";
}
echo "Connected successfully"."<br>";

/* $sql="create table employee(empid int(4),
                             name varchar(10),
							 salary int(9))";
							 
$var =mysqli_query($conn,$sql);
if(!$var){
	echo"failed to create table";
}
else
	echo"table created";
$sql="insert into employee(empid ,name ,salary)values(1526,'ishika',54000)";

							 
$var =mysqli_query($conn,$sql);
if(!$var){
	echo"failed to insert value";
}
else
	echo"values inserted";*/
/*
$sql="update employee set empid=1226 where name='aatif' ";

							 
$var =mysqli_query($conn,$sql);
if(!$var){
	echo"failed to update";
}
else
	echo"values updated";
/*
$sql="delete from employee where empid=1526";
$var =mysqli_query($conn,$sql);
if(!$var){
	echo"failed to update";
}
else
	echo"values updated"*/
 $sql="select rollno,name,address from student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Rollno: " . $row["rollno"]. " - Name: " . $row["name"]. " - Address: " . $row["address"]. "<br>";
  }
} else {
  echo "0 results";
}
 
 mysqli_close($conn);
 
?>