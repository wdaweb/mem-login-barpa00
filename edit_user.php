<?php
include "./base.php";
$name=$_POST['name'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$id=$_POST['id'];

$sql="update user set name='$name'
,addr='$addr',tel='$tel',birthday='$birthday',email='$email' where id='$id'";
$pdo->exec($sql);
echo "<a href='./member_center.php'>編輯完成回到會員中心</a>";
//header("location:member_center.php");
?>