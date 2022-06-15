<?php
require "header.php";
$i = $_GET['i'];

if ($i == 1) $st="Данные успешно добавлены";

if ($i == 2) $st="Данные успешно удалены";

if ($i == 3) $st="Данные успешно обновлены";
?>

<h4><?php echo $st; ?></h4>
    <a href="admin.php?admin=admin&panel=admin">Вернуться</a>
<?php
require "footer.php";
?>