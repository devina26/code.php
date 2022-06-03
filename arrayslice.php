<?php
$arr=array(1=>"hello",2=>"hey",3=>"fine",4=>"hii",5=>"devina");
print_r($arr);
$sl=array_slice($arr,2,2,true);
echo"<br/>";
print_r($sl);
?>