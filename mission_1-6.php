<html>
<head>
<title>mission_1-6.php</title>

</head>
<body>
<form action="mission_1-6.php" method="POST">
  <input type="text" name="comment" placeholder="コメント"><br />
  <input type="submit" value="送信する"/>
</form>
<?php
if (empty($_POST["comment"])){}

else{
$filename = 'mission_1-6.txt';
$fp = fopen($filename, 'a');
fwrite($fp, $line.$_POST["comment"]);
fwrite($fp,$line."\n");
fclose($fp);

echo $_POST["comment"] ;

}
?>
</body>
</html>