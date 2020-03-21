<?php

if(!$_POST['submit_auto']) {
    try {

        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );

        $pdo = new PDO("mysql:host=localhost; dbname=parking;charset=utf8", "ParkingUser", "root", $opt);
        $carmake = trim($_POST['carmake']);
        $model = trim($_POST['model']);
        $color = trim($_POST['color']);
        $number = trim($_POST['number']);
        $flag = $_POST['flag'];


        session_start();
        $id = $_SESSION['id'];


        if (!empty($_POST['carmake']) && !empty($_POST['model']) && !empty($_POST['color']) && !empty($_POST['number']) && !empty($_POST['flag'])) {


            $sql = "INSERT INTO auto(carmake, model, color, number, flag, client_id) VALUES(:carmake, :model, :color, :number, :flag, :id)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':carmake' => $carmake, ':model' => $model, ':color' => $color, ':number' => $number, ':flag' => $flag, ':id' => $id]);

            echo "Красава Стас, ты лучший";
        } else {
            echo "Заполните все поля";
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}