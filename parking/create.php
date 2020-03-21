<?php require "header.php"?>

<div class="content">
    <form action="client.php" method="post">
        <h3>Введите ФИО</h3><br>
        <input type="text" name="fullname"><br>
        <h3>Выберите пол</h3><br>
        <input type="radio" name="sex"  value="1">Мужской
        <input type="radio" name="sex" value="2">Женский<br>
        <h3>Введите телефон</h3><br>
        <input type="tel" name="phone"><br>
        <h3>Введите адресс</h3><br>
        <input type="text" name="adress"><br>

        <button type="submit" name="submit">Сохранить</button>
    </form>
<form action="auto.php" method="post">
    <div id="after">
        <table class="table table-bordered" id="dynamic_field">
            <tr>
                <td><input type="text" name="carmake"><br></td>
                <td><input type="text" name="model" id="model" ><br></td>
                <td><input type="text" name="color" id="color"><br></td>
                <td><input type="text" name="number" id="number"><br></td>
                <td><input type="radio" name="flag" value="да" id="flag">да<br>
                    <input type="radio" name="flag" value="нет" id="flag">нет<br></td>

            </tr>
        </table>

    </div>
    <button type="button"  class="btn btn-succes" id="click">+</button>
    <button type="button"  class="btn btn-remove" id="remove">-</button>
    <button type="submit" name="submit_auto">Сохранить</button>
</form>



</div>









<?php require "footer.php"?>