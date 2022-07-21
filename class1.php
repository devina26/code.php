<?php
$num;
$a;
$b;
while ($num>=0) {
   $a = $num % 10;
   $b = ($a*10) + $a;
   $num = $num / 10;
}
echo $num;
?>