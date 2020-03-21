<?php
try {
    $opt = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    $pdo = new PDO("mysql:host=localhost; dbname=parking;charset=utf8", "ParkingUser", "root", $opt);


    function get_cars_all(){
        global $pdo;
        $cars = $pdo->query("SELECT * FROM auto");
        return $cars;
    }
    function get_clients_by_id($id){
        global $pdo;
        $clients = $pdo->query("SELECT * FROM client WHERE id = $id");
        foreach ($clients as $client) {
            return $client['fullname'];
        }
    }

    if (isset($_GET['del'])) { //проверяем, есть ли переменная
        //удаляем строку из таблицы
        $sql = "DELETE FROM client WHERE client.id = {$_GET['del']}";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }



}
catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }