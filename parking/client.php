<?php
if(!$_POST['submit']){
    try {
        $opt = array(
            PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );



        $pdo = new PDO("mysql:host=localhost; dbname=parking;charset=utf8", "ParkingUser", "root", $opt);

        if (!empty($_POST['fullname']) && !empty($_POST['sex']) && !empty($_POST['phone'])) {



            $fullname = trim($_POST['fullname']);
            $sex = $_POST['sex'];
            $adress = trim($_POST['adress']);
            $phone = trim($_POST['phone']);
            $sql = "INSERT INTO client(fullname, sex, adress, phone)  VALUES(:fullname, :sex, :adress, :phone)";
            $statement = $pdo->prepare($sql);
            $statement->execute([':fullname' => $fullname, ':sex' => $sex, ':adress' => $adress, ':phone' => $phone]);

            echo "Благодарю" . " " . $_POST['fullname'];
            $id = $pdo->lastInsertId();

            session_start();
            $_SESSION['id'] = $id;


        } else {
            echo "Запишите все поля";
        }

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

