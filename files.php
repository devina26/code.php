<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file uploading</title>
</head>
<body>
<H3> DEVINA DUGAR!!</H3>
<H4> Demontrating uploading file and move to diffrent Location</H4>
    <form action='' method="post" enctype="multipart/form-data">
        <input type="file" name="upload">
        <br>
        <br>
        <input type="submit" name="login">
        <br>
</form>
</body>
</html>
<?php
if(isset($_FILES['upload']))
{
    echo"<pre>";
    print_r($_FILES);
    echo"</pre>";
    $uploadir =  "fileuploading/"; 
    $file_name=$_FILES['upload']['name'];
    $file_size=$_FILES['upload']['size'];
    $file_tmp=$_FILES['upload']['tmp_name'];
    $file_type=$_FILES['upload']['type'];
    move_uploaded_file($file_tmp,"$uploadir/$file_name");
}
?>