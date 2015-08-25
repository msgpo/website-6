<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Поддержи нас | SliTaz</title>
	<meta name="description" content="SliTaz GNU/Linux asso sponsor"/>
	<meta name="keywords" lang="ru" content="slitaz pro, slitaz sponsor, support"/>
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

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Избранный спонсор</strong></p>
	<?php include("../../lib/rand-sponsor.php"); ?>
	<p><?php echo "<a href='$url'>$name</a>" ?></p>
</div>

<h2 style="margin-right: 220px;">Спонсирование SliTaz</h2>

<p>
	SliTaz является проектом на некоммерческой основе, и мы всегда ищем
	новые возможности денежной поддержки проекта и получения нового
	оборудования.
</p>

<p>Во-первых, огромное спасибо нашим <a href="#cur">текущим спонсорам</a>
	и всем тем людям, которые поддерживают нас небольшими, но очень важными
	пожертвованиями проекту. Проект еще достаточно молодой, но за 5 лет
	активного развития мы выросли и стали операционной системой
	профессионального класса, безопасной для использования в производственной
	среде.
</p>


<h3>Денежная поддержка разработчиков</h3>

<p>Используете ли вы SliTaz в своём проекте? Хотите ли видеть как дистрибутив
	становится еще более профессиональным при поддержке основных разработчиков,
	работающих над проектом полный рабочий день? Если это так, Вы можете
	спонсировать Ассоциацию SliTaz, которая заплатит разработчику, чтобы он мог
	работать с полной отдачей над SliTaz. В действительности нам не хватает
	денег, чтобы платить разработчику в течение всего года, но сумма
	пожертвований и денежная поддержка позволяет профессионалу работать над
	проектом 3–4 месяца в году. Мы надеемся, что придет время, когда у SliTaz
	будут разработчики, работающие на постоянной основе.</p>


<h3>Спонсирование оборудования</h3>

<p>Как любой проект с открытым кодом, мы разрабатываем SliTaz на наших
	собственных персональных компьютерах. Но иногда нам всё же нужно менять наши
	личные системы, мы нуждаемся в новом оборудовании. Кроме того, мы не можем
	протестировать дистрибутив на некоторых специфических машинах, потому что
	мы не имеем к ним доступа. Если вы являетесь производителем оборудования
	и хотите, чтобы SliTaz работал «из коробки» на ваших компьютерах, вы можете
	прислать нам образцы, чтобы мы могли работать на них для вас.</p>
<p>SliTaz собран с утилитами, готовыми к кросс-компиляции и мы хотели бы
	перенести SliTaz на платформу ARM. Для этого нам понадобится некоторое
	оборудование ARM, чтобы иметь возможность проверить наши
	кросс-скомпилированные программы и адаптировать SliTaz к архитектуре ARM.</p>


<h3>Повторное использование оборудования</h3>

<p>SliTaz — замечательный дистрибутив, дающий старому компьютеру второе дыхание,
	поэтому нам также нужно и старое «железо», чтобы проверить его. Кроме
	того, мы можем пустить в дело некоторое ваше старое «железо», предварительно
	установив SliTaz, а затем продать его по низкой цене. Люди получат дешевые,
	но мощные машины, а мы заработаем немного денег, также и на предоставлении
	услуг.</p>


<h2>Контакты и информация</h2>

<p>Если вы заинтересовались и хотите получить больше информации о денежном или
	аппаратном спонсорстве, вы можете связаться с Ассоциацией SliTaz по
	электронной почте &lt;asso at slitaz.org&gt; или по традиционному
	<a href="../asso/#postal">почтовому адресу</a>.</p>
<p>Поддерживая SliTaz, вы получите ваш логотип и ссылку на ваш веб-сайт на этой
	странице, которая связана со всеми другими страницами сайта. Вы также
	получите возможность публично заявить свое участие в проекте с открытым
	исходным кодом и получите больше внимания от свободного программного
	обеспечения и пользователей Linux.</p>


<h2 id="cur">Наши текущие спонсоры</h2>

<table>
	<tbody>
		<tr>
			<td style="width: 140px; height: 80px;">
				<a href="http://www.ads-lu.com/"><img
				src="/images/sponsor/ads.png" alt="Allied Data Sys"
				style="float: left;" /></a>
			</td>
			<td>Allied Data Sys — ADS является спонсором главного зеркала
				SliTaz и обеспечивает нам полный доступ к виртуальной машине
				с высокоскоростным соединением. Это позволяет нам использовать
				машину в соответствии с нашими желаниями, без каких-либо
				ограничений. Огромное спасибо ADS за услуги и быстрое
				реагирование на любые наши вопросы и запросы.</td>
		</tr>
		<tr>
			<td style="width: 140px; height: 80px;">
				<a href="https://duckduckgo.com/?t=slitaz"><img
				src="/images/sponsor/ddg.png" alt="DuckDuckGo"
				style="float: left;" /></a>
			</td>
			<td>Поисковая система DuckDuckGo — DDG подписали соглашение
				о партнерстве со SliTaz на раздел доходов от размещения
				<em>рекламных ссылок</em> в результатах поиска, видимых
				пользователям SliTaz. Мы получаем 50% выручки, поэтому
				использование DDG в SliTaz помогает обоим проектам. В поисковой
				системе DuckDuckGo можно найти намного больше мгновенных
				ответов, меньше спама и беспорядка, много вкусностей и реальную
				защиту вашей приватности.</td>
		</tr>
		<tr>
			<td style="width: 140px; height: 80px;">
				<a href="https://www.security-audit.com"><img
				src="/images/sponsor/security-audit.png" 
				alt="Website penetration testing"
				style="float: left;" /></a>
			</td>
			<td>
				Security Audit Systems provide independent website penetration
				testing services for businesses around the world.  One of the UK's
				leading website security providers that offers a range of 
				website security testing services.
			</td>
		</tr>
	</tbody>
</table>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
