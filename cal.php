 <?php
 echo "devina dugar"."<br>"."demonstrating OOPS methodology"."<br>";
 class cal
 {
 public $a,$b,$c;
function sum()
{
$this->c=$this->a+$this->b;
return $this->c;
} 
function mul()
{
$this->c=$this->a*this->b;
return $this->c;
}
 }
 $cl=new cal();
 $cl->a=10;
 $cl->b=20;
 echo"sum".$cl->sum;
 echo $cl->new();
 $cl=new cal();
 $cl->a=20;
 $cl->b=30;
 echo $cl->sum();
 $cl->new();
 ?>