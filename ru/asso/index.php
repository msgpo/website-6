<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title>Ассоциация | SliTaz</title>
	<meta name="description" content="SliTaz GNU/Linux asso non-profit donate"/>
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
<section id="content">

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Наш спонсор</strong></p>
	<?php include("../../lib/rand-sponsor.php"); ?>
	<p><?php echo "<a href='$url'>$name</a>" ?></p>
</div>


<h2 style="margin-right: 220px;">
Ассоциация SliTaz
</h2>

<p>
Ассоциация SliTaz GNU/Linux является некоммерческой организацией, поддерживающей и управляющей проектом.
Ее миссия заключается в обеспечении инфраструктуры и долговечности проекта.
</p>

<ul>
<li><a href="#overview">
Обзор
</a></li>
<li><a href="#goals">
Текущие цели
</a></li>
<li><a href="#members">
Участники
</a></li>
<li><a href="../sponsor/">
Спонсоры
</a></li>
<li><a href="#donation">
Пожертвования
</a></li>
<li><a href="#postal">
Почтовый адрес
</a></li>
</ul>


<h3 id="overview">
Обзор
</h3>

<p>
SliTaz GNU/Linux — международная ассоциация, основанная в Швейцарии и уважающая Гражданский кодекс Швейцарии.
Ассоциация состоит из комитета и участников, и обеспечивает финансовые вопросы и оплату труда персонала.
Участники встречаются один раз в год на общем собрании и принимают решения, например, о деятельности ассоциации или членских взносах.
Каждый участник имеет право голоса по отдельным предложениям и может использовать аппаратные средства ассоциации (включая CD-ROM, футболки) в качестве помощи в учреждении рабочей группы, организующей мероприятия.
</p>
<p>
Проект приобретает масштаб и всё чаще и чаще требует профессионального подхода, поэтому создание ассоциации рассматривается как необходимый шаг.
Экономическая модель ассоциации была выбрана такой, чтобы удовлетворить потребности проекта и предоставить надежные и высококачественные услуги для наших пользователей и деловых партнеров, которые желают спонсировать проект.
</p>
<p>
Копия устава отправляется каждому участнику при регистрации, а онлайн-версия в формате PDF всегда доступна на сайте:
<a href="/fr/asso/status-association-slitaz.pdf">status-association-slitaz.pdf</a>
|
<a href="/en/asso/statutes.php">английский перевод</a>.
</p>


<h3 id="goals">
Текущие цели
</h3>

<p>
Проект SliTaz использует открытую модель развития, и все работы выполняются сообществом добровольцев.
Наша цель заключается в улучшении организации вкладов в проект.
Доброжелательность проекта, поддержка, обновление сайтов, услуги по техническому обслуживанию, техническая поддержка и управленческие команды — вот темы, к которым мы хотели бы обратиться и профессионально ими заниматься.
</p>
<p>
Для достижения этих целей нам, в идеале, нужны 1 или 2 разработчика, работающих неполный или полный рабочий день над SliTaz.
Они несут ответственность за консолидацию и оптимизацию существующих систем при работе с новыми потребностями.
Разнообразные суб-проекты также станут более динамичными, а новые возможности будут публиковаться гораздо чаще.
</p>


<h3 id="members">
Участники
</h3>

<p>
Ассоциация открыта для любых лиц.
Став участником, вы поддержите проект и обеспечите его устойчивое развитие посредством ежегодных взносов.
</p>
<p>
Для вступления в ассоциацию просто пришлите нам письмо или электронную почту: asso (at) slitaz.org.
После этого вы получите информационный пакет, подробности платежных сборов и копию устава.
Минимальный взнос был установлен в 2009-10 годах на уровне 40 евро.
Пожалуйста, укажите в электронной почте следующую информацию о вас:
</p>
<ul>
<li>
Ф.И.О.;
</li>
<li>
полный адрес;
</li>
<li>
страна.
</li>
</ul>


<h3 id="donation">
Пожертвования
</h3>

<p>
Существуют различные способы, которыми можно оказать финансовую поддержку ассоциации, стать участником или спонсором, или сделать разовый взнос через онлайн-службу безопасных платежей PayPal или с помощью банковского перевода.
Для микроплатежей вы можете использовать Flattr, который является очень хорошим сервисом для проектов с открытыми исходниками.
Проект имеет также некоторые материально-технические потребности; мы будем рады любому подаренному оборудованию в хорошем рабочем состоянии.
</p>

<?php include("../../lib/html/donate.html"); ?>


<h3 id="postal">
Почтовый адрес
</h3>

<div class="box">
Association SliTaz<br />
Rue du Village 40<br />
1081 Montpreveyres<br />
Switzerland
</div>

<!-- End of content -->
</section>

<?php include("../../lib/html/footer.ru.html"); ?>

</body>
</html>
