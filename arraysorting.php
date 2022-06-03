<?php
echo"devina dugar"."<br>"."demonstrating sorting in arrays:"."<br>";
$arr1=array("10"=>"devina","17"=>"ayush","23"=>"amit","26"=>"surya",
"5"=>"nikhil");
print_r ($arr1);
asort($arr1);
echo "<br>"."sorting according to the values:"."<br>";
foreach($arr1 as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
ksort($arr1);
echo "sorting accoring to keys:"."<br>";
foreach($arr1 as $x => $x_value) 
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
arsort($arr1);
echo "reverse sorting:"."<br>"; 
foreach($arr1 as $x => $x_value)
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
