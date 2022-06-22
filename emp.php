<?php
echo "devina dugar"."<br>"."demonstrating employee information and salary using fucntions"."<br>";
class emp
{
	public $a,$b,$c;
	function sum()
	{
	$this->c=$this->a+$this->b;
	return $this->c;
	}
	function mul()
	{
	$this->c=$this->a*$this->b;
	return $this->c;
	}
}
$emp_info=new emp();
$emp_info->a="devina";
$emp_info->b="vanika";
$sal=new emp();
$sal->a=20000;
$sal->b=30000;
echo "emp_info 1<br>",$emp_info->a;
echo"<br>";
echo $sal->a;
echo"<br>";
echo "emp_info 2<br>" ,$emp_info->b;
echo"<br>";
echo $sal->b;
?>