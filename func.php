<?php
function show_places()
{
    require "db.php";
    $sql = "SELECT * FROM places";
    $result = mysqli_query($link, $sql) or die("Неудачный вывод мест");
    while ($row = mysqli_fetch_array($result)) {
        $array_place[$row["id"]] = $row["name"];
    }
    $str = "";
    foreach ($array_place as $key => $value) {
        $str = $str . "<option value='" . $key . "'>" . $value . "</option>";
    }
    return $str;
}

function proverca($str)
{
    $str = strip_tags($str);
    $str = htmlentities($str, ENT_QUOTES, "UTF-8");
    $str = htmlspecialchars($str, ENT_QUOTES);
    return $str;
}

function show_conference()
{
    require "db.php";
    if (isset($_POST["search"])) {
        $name = proverca($_POST["name"]);
        $sql = "SELECT *, conference.name AS cn, conference.num AS cnum FROM conference JOIN places ON conference.place = places.id WHERE status = 'Новая' AND conference.name LIKE '%" . $name . "%'";
    } else {
        $sql = "SELECT *, conference.name AS cn, conference.num AS cnum FROM conference JOIN places ON conference.place = places.id WHERE status = 'Новая'";
    }
    $result = mysqli_query($link, $sql) or die('Неудачный вывод конференций');
    while ($row = mysqli_fetch_array($result)) {
        ?>
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
            <label><?= $row['status'] ?></label>
        </div>
    <?php }
}

?>