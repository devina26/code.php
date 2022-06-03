<?php
echo"devina dugar"."<br>"."demonstrating string functions:"."<br>";  
echo"string functions"."<br/>";
echo "length of the string-webster is ";
echo strlen("webster");
echo "<br/>"."position of the world in helloworld is at "
.strpos("helloworld" ,"world");
$string="hello how are you";
$s=str_split($string);
echo"<br>";
print_r($s);
echo"<br/>";
$s1=explode(" ",$string);
print_r($s1)
?>