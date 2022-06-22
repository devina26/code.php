<?php
$myfile = fopen("devina.txt", "w") or die("Unable to open file!");
$txt = "devina dugar\n";
fwrite($myfile, $txt);
$txt = "demonstrating file fucntion\n";
fwrite($myfile, $txt);
fclose($myfile);
?>