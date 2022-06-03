<?php
echo"variable scope"."<br/>";
$x=10; 
function myfunction()
{
$y=20;  
echo"$y is the local variable declared inside a function"."<br/>";
}
myfunction();
echo"$x is declared at global scope";
?>