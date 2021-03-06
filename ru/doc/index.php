<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Документация | SliTaz</title>
	<meta name="description" content="Документация SliTaz GNU/Linux"/>
	<meta name="keywords" lang="ru" content="Система, бесплатно, Gnu, Linux, открытое ПО, LiveCD в RAM"/>
	<meta name="author" content="Christophe Lincoln"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>

<?php 
include("../../lib/html/header.ru.html");
include("../../lib/html/nav.ru.html"); 
include("../../lib/lang.php");
?>

<!-- Content -->
<div id="content">

<h2>Документация</h2>

<p>Официальная документация SliTaz доступна на сайте Wiki сообщества.
	Каждый LiveCD SliTaz комплектуется инструкциями и руководством
	по началу работы, которые доступны через меню «Документация».
</p>

<ul>
	<li><a href="http://doc.slitaz.org/ru:start">Wiki сообщества</a></li>
	<li><a href="http://hg.slitaz.org/slitaz-doc/raw-file/tip/slitaz/index.ru.html"
		>Руководство по началу работы</a></li>
</ul>

<h2>Handbook и Cookbook</h2>

<p><a href="http://doc.slitaz.org/ru:handbook:start">Handbook</a> — Настольная
	книга SliTaz. Использование LiveCD, управление пакетами, администрирование
	сети и системы, конкретные инструкции. Эта книга создана усилиями
	сообщества с целью обеспечить высокое качество документации для
	пользователей SliTaz. Он поможет вам начать работать с SliTaz GNU/Linux
	и покажет вам, как настроить систему под ваши собственные нужды
	и предпочтения. Это тот документ, который мы рекомендуем вам прочитать,
	изучить и консультироваться им в первую очередь.</p>
<p><a href="http://doc.slitaz.org/ru:cookbook:start">Cookbook</a> — Поваренная
	книга SliTaz. Информация, касающаяся управления, функционирования
	и развития дистрибутива. Инструкции по использованию wok и рецептов
	пакетов, описания загрузочных сценариев и файлов rootcd, а также различных
	утилит.</p>


<h2>Scratchbook</h2>

<p>Исторически сложилось, что Scratchbook был написан в то время, когда был
	создан SliTaz и после этого книга не обновлялась. Однако, с течением
	времени, некоторые участники SliTaz перенесли книгу в Wiki и внесли
	некоторые изменения: <a href="http://doc.slitaz.org/ru:scratchbook:start"
	>Scratchbook сообщества</a></p>
<p><a href="/en/doc/scratchbook/">Первоначальный Scratchbook</a>
	<em>(англ.)</em> SliTaz описывает этапы создания самого первого
	дистрибутива SliTaz, а именно: компиляция ядра Linux, установка
	графического сервера (Xvesa), приложений GTK и т.д. Книга также содержит
	подробные инструкции, следуя которым и имея некоторый запас времени
	и желания, можно собрать систему GNU/Linux из исходников.</p>


<h2>Руководства</h2>

<ul>
	<li><a href="http://hg.slitaz.org/tazpkg/raw-file/tip/doc/tazpkg.ru.html"
		>Руководство Tazpkg</a> — Менеджер пакетов SliTaz.</li>
	<li><a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.ru.html"
		>Руководство Tazlito <em>(англ.)</em></a> — Утилита LiveCD SliTaz.</li>
	<li><a href="http://hg.slitaz.org/tazusb/raw-file/tip/doc/tazusb.en.html"
		>Руководство TazUSB <em>(англ.)</em></a> — Утилита LiveUSB SliTaz.</li>
	<li><a href="http://hg.slitaz.org/cookutils/raw-file/tip/doc/cookutils.en.html"
		>Руководство Cookutils <em>(англ.)</em></a> — Сборщик пакетов
		SliTaz.</li>
</ul>


<h2>Примечания к выпуску</h2>

<p>Примечания к выпускам SliTaz предоставляют подробную информацию о стабильной
	версии и дают несколько полезных советов, которые помогут вам начать
	работать с системой. Примечания к выпускам включены в основной LiveCD
	и доступны через меню «Документация».</p>

<ul>
<?php
	$relnotes = array();
	for ($release = 1;; $release++) {
		$file = "releases/".$release.".0/relnotes.ru.html";
		if (!file_exists($file)) {
			$file = "../../en/doc/releases/".$release.".0/relnotes.en.html";
			if (!file_exists($file))
				break;
		}
		array_unshift($relnotes, array("release" => $release.".0", "file" => $file));
	}
	foreach ($relnotes as $release) {
		print "	<li><a href=\"".$release["file"]."\">SliTaz GNU/Linux ".$release["release"]." -\n";
		print "		Release Notes</a></li>\n";
	}
?>
</ul>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
