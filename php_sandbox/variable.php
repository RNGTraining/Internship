<!DOCTYPE html>
<html>
<head>
	<title>string function</title>
</head>
<body>
<?php
$firstString = "the quick brown fox ";
$secondString = "jumped over the lazy dog";
$thirdString = $firstString;
$thirdString.=$secondString;
echo $thirdString;
echo "<br />";
echo strtoupper($thirdString);
echo "<br />";
echo ucwords($thirdString);
echo "<br />";
echo strlen($thirdString);
echo "<br />";
echo str_replace("fox", "cheeter", $thirdString);
echo "<br />";
echo (3+3)/2*4;
echo "<br />";
$var1=12;
$var2=8; 
?>

<br />
<?php
echo (($var2 + 2 + 4) * $var1) / 2+3;
echo "<br />";
$var2 +=12;
echo $var2;
echo "<br />";
$var2++;
echo $var2;
echo "<br />";
$myFloat = 12.5;
echo round($myFloat);echo "<br />";
echo ceil($myFloat);echo "<br />";
echo floor($myFloat);
?>
</body>
</html>