<?php
require "db.php"; ?>
<div class="content">

<div>
    <?php




    $cars = get_cars_all();
    foreach ($cars as $car):  ?>
    <?php $car_name = get_clients_by_id($car["client_id"]) ?>
        <table>
            <tr>
                <td><?php echo $car_name;?></td>
                <td><?php echo $car['carmake']?></td>
                <td><?php echo $car['model']?></td>
                <td><?php echo $car['number']?></td>
                <td><a href="?del=<?= $car['client_id'] ?>">Удалить</a> </td>

                <td><a href="?auto_id=<?$car['id'] ?>">Изменить данные Клиента</a> </td>
                <td><a href="?client_id=<?$car['client_id'] ?>">Изменить данные авто</a></td>
            </tr>
        </table>


    <?php endforeach; ?>
</div>

</div>
<?php require "footer.php"; ?>