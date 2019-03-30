<html>
<head>
<title>mission_2-5.php</title>
<meta charset="UTF-8">
</head>
<body>

<?php
if(!empty($_POST["edit"]) and !empty($_POST["pass"])){
//editとパスワードに書かれているなら
	$edit=$_POST["edit"];
	$lines=file('mission_2-5.txt');

	$fp=fopen('mission_2-5.txt','a');
	

	foreach($lines as $line){
	$line2=explode("<>",$line);
//配列化
	if($_POST["edit"]==$line2[0] and $_POST["pass"]==$line2[4]){
	$edit1=$line2[1];
	$edit2=$line2[2];
	$edit3=$line2[0];
		}
	else{}
	}
	fclose($fp);
}

else{
//editに書かれてないなら

$edit1="名前";
$edit2="コメント";

}
?>

<form action="mission_2-5.php" method="POST">
  <input type="text" name="namae" value="<?php echo $edit1;?>"><br />
  <input type="text" name="comment" value="<?php echo $edit2;?>"><br />
  <input type="text" name="pass" placeholder="パスワード">
  <input type="hidden" name="number" value="<?php echo $edit3;?>">
  <input type="submit" value="送信する"/><br />
  <input type="text" name="delete" placeholder="削除対象番号">
  <input type="submit" value="削除する"/><br />
  <input type="text" name="edit" placeholder="編集対象番号">
  <input type="submit" value="編集する"/>
</form>

<?php
if (!empty($_POST["namae"]) and !empty($_POST["comment"]) and !empty($_POST["pass"]) and empty($_POST["delete"]) and empty($_POST["edit"]) and empty($_POST["number"])){
//名前〇、コメント〇、パスワード〇、削除×、編集×、hidden×なら
	$filename = 'mission_2-5.txt';
	$fp = fopen($filename, 'a');
	$date=date("Y/m/d h:m:s");
//書き込み
	fwrite($fp,(count(file($filename))+1)."<>".$_POST["namae"]."<>".$_POST["comment"]."<>".$date."<>".$_POST["pass"]."<>");
	fwrite($fp,"\n");
	fclose($fp);
}
?>

<?php
if(!empty($_POST["delete"]) and !empty($_POST["pass"])){
//deleteに書かれているなら
	$delete=$_POST["delete"];
	$lines=file('mission_2-5.txt');
	$fp=fopen('mission_2-5.txt','w');
	
	foreach($lines as $line){
	$line2=explode("<>",$line);
//配列化
	if($delete==$line2[0] and $_POST["pass"]==$line2[4]){
		
		}
	else{fwrite($fp,$line);
		}
	}
	fclose($fp);
}
?>







<?php
if(!empty($_POST["namae"]) and !empty($_POST["comment"]) and !empty($_POST["number"]) and !empty($_POST["pass"])){
//名前、コメント、hidden番号があるなら
	$lines=file('mission_2-5.txt');
	$fp=fopen('mission_2-5.txt','w');
	$date=date("Y/m/d h:m:s");
	foreach($lines as $line){
	$line2=explode("<>",$line);
//配列化
	if($_POST["number"]==$line2[0] and $_POST["pass"]==$line2[4]){
		
		}
	else{fwrite($fp,$line);
		}
	}
		fwrite($fp,$_POST["number"]."<>".$_POST["namae"]."<>".$_POST["comment"]."<>".$date."<>".$_POST["pass"]."<>");
		fwrite($fp,"\n");

}
?>

<?php
$fp=fopen('mission_2-5.txt',"r");
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