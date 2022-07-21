<?php
$num = 5;
$flag = 0;
$i = 2;
while($i < $num/2){
if($num % $i == 0){
    $flag = 1;
    break;
}

$i++;
}
if($flag = 0){
    echo "prime";
}
else{
    echo "Not prime";
}