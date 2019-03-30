<html>
<head>
<title>mission_1-7.php</title>
<mata charset="utf-8">
</head>
<body>
<form action="mission_1-7.php" method="POST">
  <input type="text" name="comment" placeholder="ƒRƒƒ“ƒg"><br />
  <input type="submit" value="‘—M‚·‚é"/>
</form>
<?php
if (empty($_POST["comment"])){}

else{
$filename = 'mission_1-7.txt';
$fp = fopen($filename, 'a');
fwrite($fp, $line.$_POST["comment"]);
fwrite($fp,$line."\n");
fclose($fp);

$contents=file("mission_1-7.txt");
foreach($contents as $value){
echo $value."<br>";
}
}
?>
</body>
</html>