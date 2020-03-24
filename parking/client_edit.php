<?php
require "db.php";

$id=$_REQUEST['id'];
$fullname=trim($_REQUEST['fullname']);
$sex=$_REQUEST['sex'];
$adress=trim($_REQUEST['adress']);
$phone=trim($_REQUEST['phone']);
$sql = "UPDATE client SET fullname = '$fullname', sex = '$sex', adress = '$adress', phone = '$phone' WHERE id='$id'";
$queryOne = $pdo->prepare($sql);
$queryOne->execute();
