<?php
require "db.php";
require "func.php";
if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM places WHERE id=".$id;
    $result = mysqli_query($link, $sql) or die("Место не найдено");

    $row = mysqli_fetch_array($result);
    if (isset($_POST["red"])) {
        $id = $_POST['id'];
        $name = proverca($_POST['name']);
        $address = proverca($_POST['address']);
        $price = proverca($_POST['price']);
        $num = proverca($_POST['num']);

        if (is_uploaded_file($_FILES['photo']['tmp_name']))
        {
            $fi = finfo_open(FILEINFO_MIME_TYPE);
            $mime = (string) finfo_file($fi, $_FILES['photo']['tmp_name']);
            if (strpos($mime, 'image') === false) die('Можно загружать только изображения.');
            $photo = basename($_FILES['photo']['name']);
            $upfile = "png/".basename($_FILES['photo']['name']);
            move_uploaded_file($_FILES['photo']['tmp_name'], $upfile);
        } else {
            echo "Ошибка загрузки файла";
        }

        $sql = "UPDATE `places` SET `name` = '" . $name . "', `address` = '" . $address . "', `num` = '" . $num . "', `price` = '" . $price . "', `photo` = '" . $photo . "' WHERE `id` = '" . $id."'";
        $result = mysqli_query($link, $sql) or die("Ошибка обновления данных");
        echo "<script>alert('Данные успешно обновлены')</script>";
    }
}
    require "header.php";
?>
<div id="two-in-all">
    <div class="zagl">
        Информация о месте проведения
    </div>
        <form method="post" action="" id="card" style="width: 95%; display: flex; justify-content: center; align-items: center; height: auto;" name="frt" enctype="multipart/form-data">
            <div class="grey">
                id места проведения<label><?php echo " - ".$row["id"]?></label>
            </div>
            <div class="grey">
                Название
            </div>
            <input type="text" name="name" class="rightt" value="<?php echo $row["name"]?>">
            <div class="grey">
                Адрес
            </div>
            <input type="text" name="address" class="rightt" value="<?php echo $row["address"]?>">
            <div class="grey">
                Максимальное количество человек
            </div>
            <input type="number" name="num" class="rightt" value="<?php echo $row["num"]?>">
            <div class="grey">
                Цена аренды руб/ч
            </div>
            <input type="number" class="rightt" value="<?php echo $row["price"]?>" name="price">
            <div class="grey">
                Фото места
            </div>
            <input type="file" class="rightt" name="photo" required>
            <input type="hidden" class="rightt" value="<?php echo $id?>" name="id">
            <input type="submit" class="pinkk" value="Редактировать" name="red">
        </form>
    <a href="admin.php?admin=admin&panel=admin">Назад</a>
    </div>
</div>

<?php
    require "footer.php";
?>
