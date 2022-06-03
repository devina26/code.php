<?php
$rec="xyz@gmail.com";
$sender="abc@gmail.com";
$subject="hello";
$headers="from: $sender";
if(mail($rec,$sender,$subject,$headers))
{
echo"mail sent";
}
else
echo"mail not sent successfully";

?>