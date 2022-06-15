<?php
require "db.php";
if ($_POST['ud_id']) {
    $mass = $_POST["ud_id"];
    $i = 0;
    while ($mass[$i]) {
        $sql = "DELETE FROM conference WHERE id=" . $mass[$i];
        $result1 = mysqli_query($link, $sql) or die("Неудачное удаление");
        $i++;
    }
    Header("Location: uspex.php?i=2");
} ?>
