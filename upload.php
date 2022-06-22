<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file</title>
</head>
<body>
<H3> DEVINA DUGAR!!</H3>
<H4> Demontrating uploading file and move to diffrent Location</H4>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button type="submit" name="sumbit">UPLOAD FILE</button>
    </form>
</body>
</html>
<?php
//mkdir("fileuploading");
if(isset($_FILES['sumbit']))
{
echo"<pre>";
print_r($_FILES);
echo"<pre>";

}
/*$file_name=$_FILES['submit']['name'];
$file_size=$_FILES['submit']['size'];
$file_tmp=$_FILES['submit']['tmp_name'];
$file_type=$_FILES['submit']['type'];
//move_upload_file($file_tmp"/"$file_name);*/
?>