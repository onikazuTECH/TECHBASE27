<html>
<head>
<title>mission_3-5.php</title>
<meta charset="UTF-8">
</head>
<body>

<?php
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>
PDO::ERRMODE_WARNING));
?>

<?php
$sql=$pdo->prepare("INSERT INTO tbtest (id,name,comment) VALUES('1',:name,:comment)");
$sql->bindParam(':name',$name,PDO::PARAM_STR);
$sql->bindParam(':comment',$comment,PDO::PARAM_STR);
$name='はじめ';
$comment='TACH BASE';
$sql->execute();
?>

</body>
</html>