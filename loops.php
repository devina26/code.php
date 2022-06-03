<?php
echo"devina dugar"."<br>"."demonstrating loops in php:"."<br>";  
$a=0;
$b=0;
for($i=0;$i<=10;$i++)
{
$a+=10;
$b+=5;
}
echo"FOR LOOP:";
echo $a."<br>";
echo $b;
echo"<BR>"."WHILE LOOP:";
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
echo "<BR>"." DO-WHILE LOOP:";
$s=0;
do{$s++;}
while($s<=5);
{
	echo $s;
}
?>