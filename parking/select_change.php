
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" href="style.css" type="text/css">
<title>Выбор пользователя для редактирования.</title>
</head>
<body>
<form action="edit.php" method="post">
<fieldset>

<?php
require 'db.php';
$select_sql = "SELECT id, fullname, phone FROM client";
$result = $pdo->prepare($select_sql);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);

do
{
printf("<input type='radio' name='client' value='%s'>%s %s<br/><br/>", $row['id'], $row['fullname'],  $row['phone']);
}
while($row = $result->fetch(PDO::FETCH_ASSOC))
?>
</fieldset>
<fieldset>
<input type="submit" value="Выбрать элемент">
</fieldset>
</form>

</body>
</html>