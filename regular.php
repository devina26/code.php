<?php
$s="jay_developer";
$pt="/jay/i";
echo"devina dugar"."<br>"."demonstrating regular expressions"."<br>";
echo preg_match($pt,$s);
echo"<br>";
echo preg_match_all($pt,$s);
echo"<br>";
echo preg_replace($pt,"devina",$s);
?>
<?php
$pattern="/^color/im";
$text="color red is more visible than \ncolor blue in daylight.";
$matches=preg_match_all($pattern,$text,$array);
echo"<br>".$matches."matches were found";
?>
