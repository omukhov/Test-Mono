<?php require "header.php";
require "db.php"; ?>
<div class="content">
    <div><a href="select_change.php">Редактировать данные</a></div>
    <div class="menu_data"><div>ФИО Клиента</div>
        <div>Марка авто</div>
        <div>Модель авто</div>
        <div>Номер авто</div></div>
<div id="uniqueId">

    <?php




    $cars = get_cars_all();
    foreach ($cars as $car):  ?>
    <?php $car_name = get_clients_by_id($car["client_id"]) ?>


    <div class="data">

        <div><?php echo $car_name;?></div>
        <div><?php echo $car['carmake']?></div>
        <div><?php echo $car['model']?></div>
        <div><?php echo $car['number']?></div>
        <div>
            <a href="?del=<?= $car['client_id'] ?>">Удалить</a>
        </div></div>


    <?php endforeach; ?>
</div>



</div>

        <script>
            $(document).ready(function () {
                $('#uniqueId').buzinaPagination({
                    itemsOnPage:2
                });
            });
        </script>



<?php require "footer.php"; ?>