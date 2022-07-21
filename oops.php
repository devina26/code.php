<?php
class cal
{
    public $a ,$b ,$c;
    function sum()
    {
        $this -> c = $this -> a + $this ->b;
        return $this->c;
    }
    function mul()
    {
        $this -> c = $this -> a * $this -> b;
        return $this -> c;
    }
}
echo "devina dugar"."<br>"."demonstrating OOPS methodology"."<br>";
$c1 = new cal();
$c1 -> a = 10;
$c1 -> b = 20;
echo "sum:".$c1 -> sum()."<br>";
echo $c1-> mul()."<br>";
$c2 = new cal();
$c2 -> a = 20;
$c2 -> b = 30;

echo $c2 -> sum()."<br>";
echo $c2 -> mul()."<br>";
?>