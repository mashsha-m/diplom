<?php
include "db.php";
require "func.php";
$name = proverca($_POST['name']);
$num = proverca($_POST['num']);
$address = proverca($_POST['address']);
$price = proverca($_POST['price']);

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

$sql = "INSERT INTO places(name, num, address, price, photo) VALUES ('$name', '$num', '$address', '$price', '$photo')";
$result = mysqli_query($link, $sql) or die('Добавление места не получилось');
echo "<script>alert('Конференция запланирована!')</script>";
Header("Location:uspex.php?i=1");
?>