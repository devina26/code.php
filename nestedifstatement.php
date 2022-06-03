<?php  
$age = 23;  
$nationality = "Indian";
echo"devina dugar"."<br>"."demonstrating nested if:"."<br>";  
echo"age:" .$age."<br>";
if ($nationality == "Indian")  
{  
    if ($age >= 18) {  
        echo "Eligible to give vote"; 
		// this is will only excute if outer 'if' condition is true. 
        }  
        else {    
            echo "Not eligible to give vote";  
        }  
}  
?>