<?php

if(!$_POST['submit_auto']) {
    try {

        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );

        $pdo = new PDO("mysql:host=localhost; dbname=parking;charset=utf8", "ParkingUser", "root", $opt);
        session_start();
        $id = $_SESSION['id'];
        $carArray = $_POST['car'];




            foreach ($carArray as $car) {
                $carmake = $car['carmake'];
                $model = $car['model'];
                $color = $car['color'];
                $number = $car['number'];
                $flag = $car['flag'];




                if(!empty($carmake) && !empty($model) && !empty($color) && !empty($number) && !empty($flag)){

                    $sql = "INSERT INTO auto(carmake, model, color, number, flag, client_id) VALUES(:carmake, :model, :color, :number, :flag, :id)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([':carmake' => $carmake, ':model' => $model, ':color' => $color, ':number' => $number, ':flag' => $flag, ':id' => $id]);

                    echo "Красава Стас, ты лучший";
                } else {
                    echo "Заполните все поля";
                }
            }







    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}