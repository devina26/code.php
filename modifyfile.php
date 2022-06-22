<?php
echo"devina dugar"."<br>"."demonstrating modifying an existing file"."<br>";
$file=fopen("file.txt","r+");
echo fwrite($file,"demonstrating modifying an existing file");
echo"<br>";
echo fread($file,filesize("file.txt"));
?>