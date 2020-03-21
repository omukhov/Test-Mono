<?php
require "db.php";

if (isset($_GET['auto_id'])) {
    $sql = "SELECT * FROM auto WHERE `ID`={$_GET['auto_id']}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

}
//Если переменная Name передана
if (isset($_POST["number"])) {
    //Если это запрос на обновление, то обновляем
    if (isset($_GET['auto_id'])) {
        $carmake = trim($_POST['carmake']);
        $model = trim($_POST['model']);
        $color = trim($_POST['color']);
        $number = trim($_POST['number']);
        $flag = $_POST['flag'];


        $sql = "UPDATE auto SET carmake='$carmake', model='$model', color='$color', number='$number', flag='$flag', client_id='$id' WHERE id ={$_GET['auto_id']}";
        $queryTwo = $pdo->prepare($sql);
        $queryTwo->execute();
        echo "Красава Стас, данные авто изменены";
    } else {
        //Иначе вставляем данные, подставляя их в запрос
        echo "Некорректные данные";
    }
    //Если вставка прошла успешно
    if ($sql) {
        echo '<p>Успешно!</p>';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($pdo) . '</p>';
    }
}

