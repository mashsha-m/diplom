<?php
error_reporting(0);
require "db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT *, conference.name AS cn, conference.num AS cnum, conference.id AS id_c FROM conference JOIN places ON conference.place = places.id WHERE conference.id=" . $id;
    $result = mysqli_query($link, $sql) or die("Место не найдено");

    $row = mysqli_fetch_array($result);

    if (isset($_POST["red"])) {
        $id = $_POST['id'];
        $status = $_POST['status'];

        $sql = "UPDATE `conference` SET `status` = '" . $status . "' WHERE `id` = '" . $id . "'";
        $result = mysqli_query($link, $sql) or die("Ошибка обновления данных");
        echo "<script>alert('Данные успешно обновлены')</script>";
    }
}
require "header.php";
?>
<div id="two-in-all">
    <div class="zagl">
        Информация о конференции
    </div>
    <form method="post" action="" id="card"
          style="width: 95%; display: flex; justify-content: center; align-items: center; height: auto;" name="frt"
          enctype="multipart/form-data">
        <div id="card">
            <div class="row">
                <div class="pinkk">
                    <?= $row['organization'] ?>
                </div>
                <div class="rightt"><?= $row['cnum'] ?> участников</div>
            </div>
            <p class="zagl"><?= $row['cn'] ?></p>
            <p class="grey"><?= $row['name'] ?></p>
            <p class="pink_text">Начало:<?= $row['date_start'] ?></p>
            <p class="pink_text">Окончание:<?= $row['date_end'] ?></p>
            <p class="pink_text">Телефон заказчика:<?= $row['phone'] ?></p>
            <p class="pink_text">email заказчика:<?= $row['email'] ?></p>
            <p class="pink_text">id конференции:<?= $row['id_c'] ?></p>
            <select name="status">
                <option value="Новая">Новая</option>
                <option value="Завершена">Завершена</option>
                <option value="Отклонена">Отклонена</option>
            </select>
            <input type="hidden" class="rightt" value="<?php echo $id ?>" name="id">
            <input type="submit" class="pinkk" value="Редактировать" name="red">
        </div>
    </form>
    <a href="admin.php?admin=admin&panel=admin">Назад</a>
</div>
</div>

<?php
require "footer.php";
?>
