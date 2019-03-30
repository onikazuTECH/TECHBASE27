<meta charset="UTF-8">
<html>
<head>
<title>mission_2-1.php</title>
</head>
<body>
<form action="mission_2-1.php" method="POST">
  <input type="text" name="namae" placeholder="名前"><br />
  <input type="text" name="comment" placeholder="コメント"><br />
  <input type="submit" value="送信する"/>
</form>
<?php
if (!empty($_POST["namae"])){

$filename = 'mission_2-1.txt';
$fp = fopen($filename, 'a');
$date=date("Y/m/d h:m:s");

fwrite($fp,(count(file($filename))+1)."<>".$_POST["namae"]."<>".$_POST["comment"]."<>".$date);
fwrite($fp,"\n");
fclose($fp);
}
?>

<?php
$fp=fopen('mission_2-1.txt',"r");
while($line=fgets($fp)){
$line2 = explode("<>",$line);
print_r($line2[0]." ".$line2[1]." ".$line2[2]." ".$line2[3]);
print_r("<br>");
}
fclose($fp);
?>
</table>
</body>
</html>