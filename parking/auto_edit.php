<?php
require "db.php";

$id=$_REQUEST['id'];

$carmake = $_POST['carmake'];
$model = $_POST['model'];
$color = $_POST['color'];
$number = $_POST['number'];
$flag = $_POST['flag'];
$sql = "UPDATE auto SET carmake = '$carmake', model = '$model', color = '$color', number = '$number', flag = '$flag' WHERE id='$id'";
$queryOne = $pdo->prepare($sql);
$queryOne->execute();
echo "Данные изменены";