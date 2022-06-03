<?php
echo"devina dugar"."<br>"."demontrating file function."."<br>";

$file="file2june.txt";
if(file_exists($file))
{
echo readfile("file2june.txt");
 copy($file,"newfile.txt");
 
 
}
	else{
		echo"file does not exists";
}

?>