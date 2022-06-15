<?php

if (($_GET["admin"] != "admin") || ($_GET["panel"] != "admin")) {
    header("Location: index.php");
}
require "header.php";
?>
    <h1>Административная панель</h1>
    <div id="two-in-all">
        <div class="zagl">Добавить место для меропрития
        </div>
        <form action="insert_place.php" id="card"
              style="width: 95%; display: flex; justify-content: center; align-items: center; height: auto;"
              method="post" enctype="multipart/form-data">
            <div class="grey">
                Название
            </div>
            <input type="text" name="name" class="rightt" placeholder="Название" required>
            <div class="grey">
                Адрес
            </div>
            <input type="text" name="address" class="rightt" placeholder="Адрес" required>
            <div class="grey">
                Максимальное количество человек
            </div>
            <input type="number" name="num" class="rightt" placeholder="Примерное количество человек" required>
            <div class="grey">
                Цена аренды руб/ч
            </div>
            <input type="number" class="rightt" placeholder="Цена" name="price" required>
            <div class="grey">
                Фото места
            </div>
            <input type="file" class="rightt" placeholder="Дата" name="photo" required>

            <input type="submit" class="pinkk" value="Отправить" name="">
        </form>
    </div>
    <div id="two-in-all">
        <div class="zagl">

            Места для конференций
        </div>
        <div>
            <form method="post" action="ud_places.php" style="flex-wrap: wrap;" class="row">
                <?php
                require "db.php";
                $sql = "SELECT * FROM places";
                $result = mysqli_query($link, $sql) or die('Неудачный вывод мест');
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row[0];
                    ?>
                    <div id="card">
                        <div class="row">
                            <div class="pinkk">
                                <?= $row['price'] ?> руб./час
                            </div>
                            <div class="rightt"><?= $row['num'] ?> участников</div>
                        </div>
                        <p class="zagl"><?= $row['name'] ?></p>
                        <p class="grey"><?= $row['address'] ?></p>
                        <img src="png/<?= $row['photo'] ?>" class="conf_photo">
                        <a href="update.php?id=<?php echo $id ?>"><label>Редактировать</label></a>
                        <br>
                        <input type="checkbox" name="ud_id[]" value="<?php echo $id; ?>">
                        <input type="submit" class="pinkk" value="Удалить" name="ud">
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
    <div id="two-in-all">
        <div class="zagl">

            Конференции
        </div>
        <div>
            <form method="post" action="ud_conferences.php" style="flex-wrap: wrap;" class="row">
                <?php
                $sql = "SELECT *, conference.name AS cn, conference.num AS cnum FROM conference JOIN places ON conference.place = places.id";
                $result = mysqli_query($link, $sql) or die('Неудачный вывод конференций');
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row[0];
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
                        <p class="pink_text">Телефон заказчика:<?= $row['phone'] ?></p>
                        <p class="pink_text">email заказчика:<?= $row['email'] ?></p>
                        <label><?= $row['status'] ?></label>
                        <br>
                        <a href="update_conf.php?id=<?php echo $id ?>"><label>Редактировать</label></a>
                        <br>
                        <input type="checkbox" name="ud_id[]" value="<?php echo $id; ?>">
                        <input type="submit" class="pinkk" name="" value="Удалить" name="ud">
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
<?php
require "footer.php";
?>