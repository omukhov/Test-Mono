<?php ;
require 'db.php';
?>

<?php

$id = $_REQUEST['client'];
$select_sql = "SELECT * FROM client WHERE id= $id";
$result = $pdo->prepare($select_sql);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);
printf("<form action='client_edit.php' method='post' name='forma'>
<fieldset>
<input type='hidden' name='id'  value='%s'><br/>
<label for='fullname'>ФИО</label><br/>
<input type='text' name='fullname' size='30' value='%s'><br/>
<label for='sex'>пол</label><br/>
<input type='radio' name='sex' value='1'>Мужской
<input type='radio' name='sex' value='2'>Женский<br/>
<label for='adress'>Адрес</label><br/>
<input type='text' name='adress' size='30' value='%s'><br/>
<label for='phone'>телефон</label><br/>
<input name='phone' type='text'  size='30' value='%s'>
</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='Редактировать запись'><br/>
</fieldset>
</form>",$row['id'], $row['fullname'], $row['sex'], $row['adress'], $row['phone']);
?>
<?php
$sql = "SELECT * FROM auto WHERE client_id= $id";
$result = $pdo->prepare($sql);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);
printf("<form action='auto_edit.php' method='post' name='form'>
<fieldset>
<input type='hidden' name='id'  value='%s'><br/>
<label for='carmake'>Марка авто</label><br/>
<input type='text' name='carmake' size='30' value='%s'><br/>

<label for='model'>Модель авто</label><br/>
<input type='text' name='model' size='30' value='%s'><br/>
<label for='color'>цвет авто</label><br/>
<input name='color' type='text'  size='30' value='%s'><br/>
<label for='number'>номер авто</label><br/>
<input name='number' type='text'  size='30' value='%s'><br/>

<label for='flag'>пол</label><br/>
<input type='radio' name='flag' value='1'>Да
<input type='radio' name='flag' value='2'>Нет<br/>

</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='Редактировать запись авто'><br/>
</fieldset>
</form>",$row['id'], $row['carmake'], $row['model'], $row['color'], $row['number'], $row['flag']);
?>


</body>
</html>
