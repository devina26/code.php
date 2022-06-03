<?php
echo"declaring a constant variable"."<br/>";
function myfunction()
{
define("pi",3.14,false); // declaration and defination of constant variable
$r=16; // radius of a circle
$area=pi*$r*$r; // calculating area of circle
echo"area of circle:";
echo"$area";
}
myfunction();

?>