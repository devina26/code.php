<?php
echo"devina dugar"."<br>"."demostrating folder functions:"."<br>";
mkdir("folder");
/*rmdir("folder"); // deleting the folder */
if(file_exists("folder"))
{
echo "folder exists";
 
 
}
	else{
		echo"file does not exists";
}
echo "<br>"."size of file:";
echo filesize("file.php");
echo"<br>"."type of file:";
echo filetype("file.php");