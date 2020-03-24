<?php require "header.php"?>

<div class="content">

        <form action="client.php" method="post">
            <table class="table table-bordered">
                <tr>
                    <td><p>Введите ФИО</p></td>
                    <td><p>Выберите пол</p></td>
                    <td><p>Введите телефон</p></td>
                    <td><p>Введите адресс</p></td>
                </tr>
                <tr>
                    <td><input type="text" name="fullname"><br></div></td>
                    <td><input type="radio" name="sex"  value="1" class="radio2">Мужской
                        <input type="radio" name="sex" value="2" class="radio2">Женский<br></td>
                    <td><input type="tel" name="phone"><br></td>
                    <td><input type="text" name="adress"><br></td>
                </tr>
            </table>


            <div class="button_save"><button type="submit" name="submit" class="btn btn-success">Сохранить</button></div>
        </form>


<form action="auto.php" method="post">
    <div id="after">
        <table class="table table-bordered">
            <tr>
                <td><p>Введите марку авто</p></td>
                <td><p>Введите модель авто</p></td>
                <td><p>Введите цвет авто</p></td>
                <td><p>Введите номер авто</p></td>
                <td><p>Есть ли ваше авто на стоянке</p></td>
            </tr>
            <tr>
                <td><input type="text" name="car[0][carmake]" value=""><br></td>
                <td><input type="text" name="car[0][model]" value="" ><br></td>
                <td><input type="text" name="car[0][color]" value="" ><br></td>
                <td><input type="text" name="car[0][number]" value=""><br></td>
                <td><input type="radio" name="car[0][flag]" value="да" id="flag" class="radio">да
                    <input type="radio" name="car[0][flag]" value="нет" id="flag" class="radio">нет<br></td>

            </tr>
        </table>

    </div>
    <button type="button"  class="btn btn-primary" id="click">+</button>
    <button type="button"  class="btn btn-danger" id="remove">-</button>
    <button type="submit" name="submit_auto" class="btn btn-success">Сохранить</button>
</form>



</div>









<?php require "footer.php"?>