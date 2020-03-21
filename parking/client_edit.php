<?php
require "db.php";

//Если передана переменная red_id, то надо обновлять данные. Для начала достанем их из БД
if (isset($_GET['client_id'])) {
    $sql = "SELECT * FROM client WHERE `ID`={$_GET['client_id']}";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

}
//Если переменная Name передана
if (isset($_POST["fullname"])) {
    //Если это запрос на обновление, то обновляем
    if (isset($_GET['client_id'])) {
        $sql = "UPDATE client SET fullname = '{$_POST['fullname']}', sex = '{$_POST['sex']}', adress = '{$_POST['adress']}', phone = '{$_POST['phone']}' WHERE id ={$_GET['client_id']}";
        $queryOne = $pdo->prepare($sql);
        $queryOne->execute();
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
