<html>
<head>
<title>mission_1-5.php</title>
<meta charset="utf-8">
</head>
<body>
<form action="mission_1-5.php" method="POST">
  <input type="text" name="comment" placeholder="コメント"><br />
  <input type="submit" value="送信する"/>
</form>
<?php
if (empty($_POST["comment"])){}

else{
$filename = 'mission_1-5.txt';
$fp = fopen($filename, 'w');
fwrite($fp, $_POST["comment"]);
fclose($fp);

echo $_POST["comment"] ;
if ($_POST["comment"] == 'TECH')
{

echo 'BASE';
}
}
?>
</body>
</html>