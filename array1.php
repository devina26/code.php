<?php
echo"devina dugar"."<br>"."demonstrating arrays functions:"."<br>";
$arr1=array("devina","dugar","bca");
print_r($arr1);
echo"<br>"."array after array padding:"."<br>";
print_r(array_pad($arr1,5,"sem2"));// it adds the element in an array.
$arr2=array(1=>"hello",2=>"hey",3=>"fine",4=>"hii",5=>"devina");
echo"<br>"."<br>"."array slice:";
print_r($arr2);
$sl=array_slice($arr2,2,2,true);
echo"<br>"."array after slicing:"."<br/>";
print_r($sl);
$arr3=array("devina","amit","surya","nikhil");
echo"<br>"."<br>"."array splice:";
print_r($arr3);
$sp=array_splice($arr3,3,3);
echo"<br>"."array after splicing:"."<br/>";
print_r($sp);
$arr4=array(1=>"devina",2=>"ayush",3=>"yash",4=>"vaibhav");
echo"<br>"."<br>"."list():";
list($a,$b,$c,$d)=$arr4;
print_r($a);
echo"$b"."<br>";
echo "$c"."<br>";
echo"$d"."<br>";

?>