<?php
class abc
{
public function __construct()
{
 echo"hello";
}
public function work()
{
  echo"working";
}
public function __destruct()
{
  #1echo"end the program";
}
};
$test=new abc();
$test->work();
$test->work();
$test->work();
$test->work();
?>