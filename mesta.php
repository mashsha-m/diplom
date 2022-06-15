<?php
include "header.php";
include "db.php";
?>
    <!--МОИ ЗАЯВКИ-->
    <div id="two-in-all">
        <div class="zagl">

            Места для конференций
        </div>
        <div class="row" style="flex-wrap: wrap;">
            <?php
            $sql = "SELECT * FROM places";
            $result = mysqli_query($link, $sql) or die('Неудачный вывод мест');
            while ($row = mysqli_fetch_array($result)) { ?>
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
                </div>
            <?php }
            ?>
        </div>
        <!--КОНТЕНТ БЛОК-->
        <div id="tree-in-all">
            <div id="column">
                <div id="one-in-tree">
                    <div class="newss"><img src="png/dialog.png" class="newspaper">Отзывы</div>

                    <div class="men"><img src="png/littlemen.png" class="lol">
                        <div class="verticall">
                            <p class="two-in-footer">
                                2-11-2022, 19:07

                            </p>
                            <p class="one-in-footer"> Классный сервис, всем рекомендую!</p></div>
                    </div>

                    <div class="men"><img src="png/littlemen.png" class="lol">
                        <div class="verticall">
                            <p class="two-in-footer">
                                3-11-2021, 12:32

                            </p>
                            <p class="one-in-footer"><span class="black">Mothard,</span> Мне тоже очень понравился :)
                            </p></div>
                    </div>

                    <div class="men"><img src="png/littlemen.png" class="lol">
                        <div class="verticall">
                            <p class="two-in-footer">
                                3-11-2021, 14:22

                            </p>
                            <p class="one-in-footer"><span class="black">ddf44,</span> А мне не понравилось.</p></div>
                    </div>

                    <div class="men"><img src="png/littlemen.png" class="lol">
                        <div class="verticall">
                            <p class="two-in-footer">
                                3-11-2021, 16:07

                            </p>
                            <p class="one-in-footer"><span class="black">Гоша,</span> Не слушайте его ;)</p></div>
                    </div>
                </div>
            </div>
            <div id="tree-in-tree">
                <div class="columnn">
                    <div class="one">
                        <div class="newss"><img src="png/camera.png" class="newspaper">Фотографии с конференций</div>
                        <div id="column">
                            <div class="row">
                                <img src="png/one_photo.jpg" class="photo">
                                <img src="png/two_photo.jpg" class="photo">
                                <img src="png/tree_photo.jpg" class="photo">
                            </div>
                            <div class="row">
                                <img src="png/four_photo.jpg" class="photo">
                                <img src="png/five_photo.jpg" class="photo">
                                <img src="png/six_photo.jpg" class="photo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

<?php
include "footer.php";
?>