<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz LiveCD Flavors</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD"/>
	<meta name="keywords" lang="da" content="System, fri, gratis, gnu, linux, software opensource, livecd LINUX i RAM"/>
	<meta name="author" content="Linux User"/>
	<?php include("../../lib/html/meta-link.html"); ?>
</head>
<body>
<!-- Danish (da) translation by Bo Vagner Højer - bohoejer@slitaz.org
	Member of Labitat Hackerspace, Copenhagen - www.labitat.dk
	visit our hackerspace every tuesday evening for free - always hot coffee -->

<?php include("../../lib/html/header.da.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../../lib/html/nav.da.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Hent varianter</h4>
		<p>
			Systemet med LiveCD varianter er et simpelt middel for brugerskaren
			til at generere cdromer for bestemte formål ved at tilbyde et udvalg af
			specifikke programpakker. Der er to muligheder for at lave en variant,
			brug en variant lavet af netværkssamfundet eller lav din egen
			via et letbetjent grafisk værktøj.
		</p>
	</div>
</div>

<?php include("../../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>LiveCD for enhver smag</h2>

<p>
	For din bekvemmelighed foreslår SliTaz holdet nogle varianter for udviklings- og den stabile version:
</p>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/3.0/flavors/slitaz-3.0-xvesa.iso">slitaz-3.0-xvesa.iso</a>
	[29.0M] - Fully-featured desktop environment using the tiny Xvesa graphical
	server and providing a nice range of software for daily tasks
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-firefox.iso">slitaz-4.0-firefox.iso</a>
	[43.0M] - Slankt skrivebordsmiljø med Mozilla Firefox
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-justx.iso">slitaz-4.0-justx.iso</a>
	[16.0M] - Slankt skrivebordsmiljø drevet af Xorg og Openbox, kun ved brug af et X-miljø og 
	værktøj til at bygge dit eget skrivebord med
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-base.iso">slitaz-4.0-base.iso</a>
	[8.0M] - Basissystem med tekstterminal og anvendelige kommandolinieværktøjer. 
	Et godt valg til en serverinstallation.
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-loram.iso">slitaz-4.0-loram.iso</a>
	[41.0M] - Loram variant som kan starte SliTaz på maskiner med meget begrænsede resourser. Behøver kun
	128MB hukommelse for ikke at blokere cdromdrevet.
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/flavors/slitaz-4.0-loram-cdrom.iso">slitaz-4.0-loram-cdrom.iso</a>
	[163.0M] - Loram variant kan starte med kun 24 MB hukommelse og en lille swappartion, men er
	ikke i stand til at frigive cdrommen
</p></div>

<div class="box-dl"><p>
	<a href="http://mirror.slitaz.org/iso/4.0/slitaz-4.0.iso">slitaz-4.0.iso</a>
	[35.0M] - 4i1 variant indeholdende  basen, justx, gtkonly og core cdromen
</p></div>

<div class="box">
	<img src="/images/network.png" alt="[ ]" />
	Gennemse variantmappen på filspejlet: 
	<a href="http://mirror.slitaz.org/iso/stable/flavors/">Stabil</a> |
	<a href="http://mirror.slitaz.org/iso/cooking/flavors/">Udvikling</a>
</div>

<h2>Hent og fremstil en variant</h2>

<p>
En <em>variant</em> er en (.flavor) fil til at fremstille en særlig variant.
Det grafiske værktøj Tazlitobox kan oprette en variant med få musseklik.
Tazlito 
<a href="http://hg.slitaz.org/tazlito/raw-file/tip/doc/tazlito.en.html">håndbogen</a> 
og <a href="http://doc.slitaz.org/en:handbook:genlivecd">vejledningen</a>
giver detalierede instruktioner på fremstillingen af varianter. På kommandolinien 
kan du få en liste over tilgængelige varianter ved kommandoen
<code>tazlito list-flavors</code>.
</p>

<h3>Skab og del din egen variant</h3>

<p>
Den sabile og udviklingsversionen giver <em>variantkernen</em> på filspejlet. 
Det kan bruges som en basis til at lave din egen variant.
Vejledningen i håndbogen bringer alle nødvendige instruktioner til at 
<a href="http://doc.slitaz.org/en:handbook:genlivecd"
	>lave din egen LiveCD variant</a>.
</p>
<p>
Hvis du har lavet en variant efter din smag, kan du sende den på
<a href="../mailing-list.php">postlisten</a> for at få den testet og
inkluderet i de officielle varianter.
</p>

<!-- End of content -->
</div>

<?php include("../../lib/html/footer.da.html"); ?>

</body>
</html>
