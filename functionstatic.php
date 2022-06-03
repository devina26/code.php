<?php
echo"static variable function";
function staticvariable() 
{
static $x=10; // declaring and defining static variable
echo"<br/>"."variable: $x";
$x++;
echo"<br/>"."after increment: $x";
}

staticvariable();
echo"<br/>";
staticvariable();
echo"<br/>";
staticvariable(); // calling the function three times
// value of the variable will increment each time we call the function
?>