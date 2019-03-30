<html>
<head>
<title>mission_3-7.php</title>
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
$id=1;
$name="畑";
$comment="thinktwice";
$sql='update tbtest set name=:name,comment=:comment where id=:id';
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':name',$name,PDO::PARAM_STR);
$stmt->bindParam(':comment',$comment,PDO::PARAM_STR);
$stmt->bindParam(':id',$id,PDO::PARAM_INT);
$stmt->execute();
?>

<?php
$sql='SELECT*FROM tbtest';
$stmt=$pdo->query($sql);
$results=$stmt->fetchAll();
foreach($results as $row){
echo $row['id'].',';
echo $row['name'].',';
echo $row['comment'].'<br>';
}
?>

</body>
</html>