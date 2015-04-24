<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Архив новостей за 2012 год | SliTaz</title>
	<meta name="description" content="Архив новостей SliTaz за 2012 год"/>
	<meta name="keywords" lang="ru" content="система, свободная, Gnu, Linux, открытое ПО, Livecd в RAM"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../../lib/html/header.ru.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.ru.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Архивы новостей</h4>
		<p>Архивы новостей сайта по годам. Обратите внимание, что некоторые
			ссылки могут быть испорчены из-за изменения структуры сайта
			(в основном это документы, которые перемещены в свой собственный
			домен).</p>
		<p><img src="/images/news.png" alt="*" />
			<a href="2007.php">2007</a> | <a href="2008.php">2008</a> |
			<a href="2009.php">2009</a> | <a href="2010.php">2010</a> |
			<a href="2011.php">2011</a> | 2012 |
			<a href="./">2014</a></p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>2012</h2>

<div class="news">

<ul>
	<li id="d20120410">
		<strong>10 апреля 2012 — Выпущен SliTaz GNU/Linux 4.0</strong>
		<p>Разработчики SliTaz рады сообщить о выпуске нового стабильного
			дистрибутива SliTaz GNU/Linux 4.0. За два года работы сообщество
			создало надежную систему, способную загружаться за еще более
			короткое время, и были добавлены более чем 1000 новых пакетов.</p>
		<p>В 35 МБ SliTaz вместился полный графический рабочий стол на основе
			LXDE и Openbox, который работает полностью в 192 МБ оперативной
			памяти. Новому ISO «4-в-1» для установки на жесткий диск требуется
			только 48 МБ; он автоматически выбирает конфигурацию, которая
			наиболее полно подходит для вашего компьютера.</p>
		<p>Наши собственные утилиты тоже «подросли». TazPkg обзавелся новой
			системой уведомлений и стал гораздо быстрее, несмотря на увеличение
			количества пакетов, а TazPanel предоставляет новую централизованную
			систему управления. Вы можете прочитать полные <a
			href="/ru/doc/releases/4.0/relnotes.ru.html">примечания к релизу
			SliTaz 4.0</a> и загрузить SliTaz 4.0 с нашего зеркала: <a
			href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso"
			>slitaz-4.0.iso</a></p>
	</li>

	<li id="d20120303">
		<strong>03 марта 2012 — Вышел SliTaz 4.0-RC2</strong>
		<p>Команда SliTaz рада сообщить о выходе нового релиз-кандидата SliTaz
			4.0-RC2. Мы провели огромную работу по исправлению ошибок в RC1 и
			доработке наших утилит, таких как TazPKG, TazPanel и TazUSB. Стало
			проще соединиться с Wi-Fi через TazPanel или новый мастер Wi-Fi.
			Теперь TazPKG лучше интегрирован с рабочим столом и имеет новую
			систему уведомлений.</p>
		<p>Эта новая версия идет с полным пакетом Xorg, с поддержкой DRI и
			с драйверами NV, Intel, Geode и Vesa, работающими «из коробки».
			Мы еще раз пересобрали все пакеты и сэкономили примерно 2 МБ
			в базовом Live-CD, поэтому теперь он включает дополнительно
			Lxrandr, Parcellite и клиент BiTorrent transmission.</p>
		<p>Мы благодарим всех, кто тестировал первый релиз-кандидат; этот RC2
			близок к грядущему SliTaz 4.0, выпуск которого запланирован через
			2 недели. Скачать ISO-образ RC2 с нашего зеркала (35,1 МБ): <a
			href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz
			4.0-RC2</a></p>
	</li>

	<li id="d20120223">
		<strong>23 февраля 2012 — Вышел SliTaz 4.0-RC1</strong>
		<p>Команда SliTaz рада объявить о выпуске первого релиз-кандидата
			SliTaz 4.0. SliTaz может загружаться за 10–12 с на сравнительно
			новом железе, а с новым ISO «4-в-1» вы сможете установить полный
			рабочий стол SliTaz, имея всего 48 МБ RAM. ISO «4-в-1» способен
			автоматически определять размер памяти и загружать SliTaz
			в текстовом режиме, в минимальном окружении X, либо с полновесным
			графическим рабочим столом.</p>
		<p>SliTaz 4.0 будет иметь в репозитории более 3000 хорошо
			протестированных пакетов, а серия релиз-кандидатов позволит нам
			отследить самые последние ошибки. После нашего последнего релиза
			Cooking, все пакеты были пересобраны дважды, чтобы обеспечить
			качество сборки.</p>
		<p>В этом RC2 мы предлагаем вам новое графическое загрузочное меню
			и графический выбор языка и раскладки клавиатуры. Дистрибутив
			содержит новое оформление рабочего стола, а также новый инсталлятор
			командной строки с CGI/веб-интерфейсом, доступным через TazPanel.
			Вы можете скачать новый ISO с нашего зеркала: <a
			href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz
			4.0-RC1</a></p>
	</li>
</ul>

</div>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
