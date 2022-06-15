<?php
include "db.php";
require "func.php";

$name = proverca($_POST['name']);
$organization = proverca($_POST['organization']);
$place = proverca($_POST['place']);
$num = proverca($_POST['num']);
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$phone = proverca($_POST['phone']);
$email = proverca($_POST['email']);

$sql = "INSERT INTO `conference` (`id`, `name`, `organization`, `place`, `num`, `date_start`, `date_end`, `phone`, `email`, `status`) VALUES (NULL, '$name', '$organization', '$place', '$num', '$date_start', '$date_end', '$phone', '$email', 'Новая')";
$result = mysqli_query($link, $sql) or die("Не получилось добавить конференцию");
Header("Location:index.php");
?>