<?php
include "header.php";
require "db.php";
require "func.php";
?>
	<!--КОНТЕНТ БЛОК 1-->
	<div id="one-in-all">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/rav92HvfxGI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<div id="two-in-one">
			<div class="news"><img src="png/newspaper.png" class="newspaper">Советы по проведению конференций</div>
			<a href="https://habr.com/ru/post/285780/"><div class="men"><div class="vertical">
				<p class="one-in-footer">
				 Убедитесь в необходимости вашего мероприятия
	    </p>
	    <p class="two-in-footer">В 2015 году по мнению экспертов будет проведено порядка 6000 конференций по поведенческим особенностям пользователей...</p></div>
			</div></a>
			<a href="https://habr.com/ru/post/285780/"><div class="men"><div class="vertical">
				<p class="one-in-footer">
				Определитесь с видом мероприятия
	    </p>
	    <p class="two-in-footer">Джаред Спул выделяет пять типов мероприятий...</p></div>
			</div></a>
			<a href="https://habr.com/ru/post/285780/"><div class="men"><div class="vertical">
				<p class="one-in-footer">
				Если не заботиться о деталях, о них позаботятся участники
	    </p>
	    <p class="two-in-footer">Детали важны и в долгосрочной перспективе. Если посетители рассказывают, как хорошо всё было организовано...</p></div>
			</div></a>
			<a href="https://habr.com/ru/post/285780/"><div class="men"><div class="verticall">
				<p class="one-in-footer">
				Обратитесь за помощью к профессионалам
	    </p>

	    <p class="two-in-footer">На одно-два самых первых мероприятия привлекайте специалистов, которые делают организацию мероприятий...</p></div>
			</div></a>
		</div>
	</div>
	<!--НОВЫЕ КОНФЕРЕНЦИИ-->
	<div id="two-in-all">
		<div class="zagl">
					Запланированные конференции
				</div>
        <form method="post" action="" style="flex-wrap: wrap;" class="row">
    <div id="two-in-all">
        <div class="grey">
            Поиск по запланированным конференциям
        </div>
        <div class="row" style="align-items: center;">
            <input type="search" name="name" id="name" style="height: 25px; width: 500px;">
            <input type="submit" class="pinkk" value="Поиск" name="search">
        </div>
    </div>
<?php
        echo show_conference();
?>
        </form>
        </div>
	<!--ЗАВЕРШЕННЫЕ КОНФЕРЕНЦИИ-->
    <div id="two-in-all">
		<div class="zagl">
					Проведённые конференции
				</div>
        <div style="flex-wrap: wrap;" class="row">
            <?php
            $sql = "SELECT *, conference.name AS cn, conference.num AS cnum FROM conference JOIN places ON conference.place = places.id WHERE status = 'Завершена'";
            $result = mysqli_query($link, $sql) or die('Неудачный вывод конференций');
            while ($row = mysqli_fetch_array($result))
            {
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
            <?php } ?>
        </div>
    </div>
	<!--КОНТЕНТ БЛОК 2-->
	<div id="tree-in-all">
			<div id="column">
		<div id="one-in-tree">
			<div class="newss"><img src="png/dialog.png" class="newspaper">Отзывы</div>
		
		<div class="men"><img src="png/littlemen.png" class="lol"><div class="verticall">
				<p class="two-in-footer">
				2-11-2022, 19:07

	    </p>
	    <p class="one-in-footer"> Классный сервис, всем рекомендую!</p></div>
			</div>

			<div class="men"><img src="png/littlemen.png" class="lol"><div class="verticall">
				<p class="two-in-footer">
				3-11-2021, 12:32

	    </p>
	    <p class="one-in-footer"><span class="black">Mothard,</span> Мне тоже очень понравился :)</p></div>
			</div>

			<div class="men"><img src="png/littlemen.png" class="lol"><div class="verticall">
				<p class="two-in-footer">
				3-11-2021, 14:22

	    </p>
	    <p class="one-in-footer"><span class="black">ddf44,</span> А мне не понравилось.</p></div>
			</div>

			<div class="men"><img src="png/littlemen.png" class="lol"><div class="verticall">
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


<?php
include "footer.php";
?>