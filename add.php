<?php
include "header.php";
?>
    <!--КОНТЕНТ БЛОК 1-->
    <div id="one-in-all">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/rav92HvfxGI" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        <div id="two-in-one">
            <div class="news"><img src="png/newspaper.png" class="newspaper">Советы по проведению конференций</div>
            <a href="https://habr.com/ru/post/285780/">
                <div class="men">
                    <div class="vertical">
                        <p class="one-in-footer">
                            Убедитесь в необходимости вашего мероприятия
                        </p>
                        <p class="two-in-footer">В 2015 году по мнению экспертов будет проведено порядка 6000
                            конференций по поведенческим особенностям пользователей...</p></div>
                </div>
            </a>
            <a href="https://habr.com/ru/post/285780/">
                <div class="men">
                    <div class="vertical">
                        <p class="one-in-footer">
                            Определитесь с видом мероприятия
                        </p>
                        <p class="two-in-footer">Джаред Спул выделяет пять типов мероприятий...</p></div>
                </div>
            </a>
            <a href="https://habr.com/ru/post/285780/">
                <div class="men">
                    <div class="vertical">
                        <p class="one-in-footer">
                            Если не заботиться о деталях, о них позаботятся участники
                        </p>
                        <p class="two-in-footer">Детали важны и в долгосрочной перспективе. Если посетители
                            рассказывают, как хорошо всё было организовано...</p></div>
                </div>
            </a>
            <a href="https://habr.com/ru/post/285780/">
                <div class="men">
                    <div class="verticall">
                        <p class="one-in-footer">
                            Обратитесь за помощью к профессионалам
                        </p>

                        <p class="two-in-footer">На одно-два самых первых мероприятия привлекайте специалистов, которые
                            делают организацию мероприятий...</p></div>
                </div>
            </a>
        </div>
    </div>
    <!--ДОБАВЛЕНИЕ ЗАЯВКИ-->
    <div id="two-in-all">
        <div class="zagl">
            Запланировать конференцию
        </div>
        <form method="post" name="form1" action="insert_conference.php" id="card"
              style="width: 95%; display: flex; justify-content: center; align-items: center; height: auto;">
            <div class="grey">
                Название
            </div>
            <input type="text" name="name" class="rightt" placeholder="Название" required>
            <div class="grey">
                Организация
            </div>
            <input type="text" name="organization" class="rightt" placeholder="Организация" required>

            <p class="grey">Место проведения</p>
            <select class="grey" name="place">
                <?php
                require "func.php";
                echo show_places();
                ?>
            </select>
            <div class="grey">
                Примерное количество человек
            </div>
            <input type="number" name="num" class="rightt" placeholder="Примерное количество человек" required>

            <div class="grey">
                Дата начала
            </div>
            <input type="datetime-local" class="rightt" placeholder="Дата" name="date_start" required>

            <div class="grey">
                Дата окончания
            </div>
            <input type="datetime-local" class="rightt" placeholder="Дата" name="date_end" required>
            <div class="grey">
                Телефон заказчика
            </div>
            <input type="number" class="rightt" placeholder="8 (000) 000 00-00" name="phone" required>
            <div class="grey">
                email заказчика
            </div>
            <input type="email" class="rightt" placeholder="Дата" name="email" required>

            <input type="submit" class="pinkk" value="Отправить" name="insert">
        </form>
        <!--КОНТЕНТ БЛОК 2-->
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