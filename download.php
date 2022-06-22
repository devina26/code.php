<html>
<head>
<title> download file using PHP</title>
</head>
<BODY>
<h2> devina dugar</h2>
<h3> demonstrating downloading image file </h3> 
<H2> Download file from here:</H2>
<a href=" download.php?file=download(1).jpg"> CLICK HERE</a>
</body>
</html>
<?php
if (empty($_GET[ 'file']))
{
$filename = basename($_GET['file']);
$filepath='destination/'.$filename;
if(!empty($filename) && file_exists($filepath)){
//Define Headers

header ("Cache-Control: public");
header ("Content-Description: FIle Transfer");
header ("Content-Disposition: attachment; filename=$filename");
header ("Content-Type: application/zip");
header ("Content-Transfer-Emcoding: binary");
readfile($filepath);
exit;
}
else{
echo "This File Does not exist.";
}
}
?>