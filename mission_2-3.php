<html>
<head>
<title>mission_2-3.php</title>
<meta charset="UTF-8">
</head>
<body>
<form action="mission_2-3.php" method="POST">
  <input type="text" name="namae" placeholder="名前"><br />
  <input type="text" name="comment" placeholder="コメント">
  <input type="submit" value="送信する"/><br />
  <input type="text" name="delete" placeholder="削除対象番号">
  <input type="submit" value="削除する"/>
</form>

<?php
if (!empty($_POST["namae"])){
	$filename = 'mission_2-1.txt';
	$fp = fopen($filename, 'a');
	$date=date("Y/m/d h:m:s");
//書き込み
	fwrite($fp,(count(file($filename))+1)."<>".$_POST["namae"]."<>".$_POST["comment"]."<>".$date);
	fwrite($fp,"\n");
	fclose($fp);
}
?>

<?php
if(!empty($_POST["delete"])){
//deleteに書かれているなら
	$delete=$_POST["delete"];
	$lines=file('mission_2-1.txt');
	$fp=fopen('mission_2-1.txt','w');
	
	foreach($lines as $line){
	$line2=explode("<>",$line);
//配列化
	if($delete==$line2[0]){
		
		}
	else{fwrite($fp,$line);
		}
	}
	fclose($fp);
}
?>

<?php
$fp=fopen('mission_2-1.txt',"r");
while($line=fgets($fp)){
//file読み込み
$line2 = explode("<>",$line);
print_r($line2[0]." ".$line2[1]." ".$line2[2]." ".$line2[3]);
print_r("<br>");
//表示
}
fclose($fp);
?>

</table>
</body>
</html>