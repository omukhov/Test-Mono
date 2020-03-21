<?php require "header.php"?>

<div class="content">
    <form action="client_edit.php" method="post">
        <h3>Изменить ФИО</h3><br>
        <input type="text" name="fullname" value="<?= isset($_GET['red_id']) ? $product['Name'] : ''; ?>"><br>
        <h3>Изменить пол</h3><br>
        <input type="radio" name="sex"  value="1" >Мужской
        <input type="radio" name="sex" value="2">Женский<br>
        <h3>Изменить телефон</h3><br>
        <input type="tel" name="phone" value="<?= isset($_GET['red_id']) ? $product['Name'] : ''; ?>"><br>
        <h3>Изменить адресс</h3><br>
        <input type="text" name="adress" value="<?= isset($_GET['red_id']) ? $product['Name'] : ''; ?>"><br>

        <button type="submit">Submit</button>
    </form>
    <form action="auto_edit.php" method="post">
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
        <button type="button"  class="btn btn-succes" id="click">Add More</button>
        <button type="button"  class="btn btn-remove id="remove">X</button>
        <button type="submit">Submit</button>
    </form>
