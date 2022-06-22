<?php
echo"devina dugar"."<br>"."demontrating reading an existing file"."<br>";
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("file.txt"));
fclose($myfile);
?>