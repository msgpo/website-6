<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>SliTaz GNU/Linux (es)</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD" />
	<meta name="keywords" lang="es" content="system linux RAM" />
	<meta name="author" content="Eduardo Suarez-Santana" />
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.es.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>P�gina de Inicio</h4>
		<p>
			SliTaz se distribuye como una imagen ISO de LiveCD cuyo
			tama�o no llega a los 30 MiB, proporcionando un sistema
			r�pido, robusto y elegante. 
		</p>
		<p>
			Si buscabas una distro port�til �ltamente configurable y 
			f�cilmente adaptable a tus necesidades, acabas de encontrarla.
			<a href="about/">Sigue leyendo...</a>
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php">
		<img src="../images/locale.png" alt="locale.png" /></a>
	<a href="../da/">Dansk</a>
	<a href="../de/">Deutsch</a>
	<a href="../en/">English</a>
	<a href="../es/">Espa�ol</a>
	<a href="../fr/">Fran�ais</a>
	<a href="../id/">Indonesian</a>
	<a href="../it/">Italiano</a>
	<a href="../pt/">Portugu�s</a>
	<a href="../cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">
    
<h2>Titulares</h2>
<p>La p�gina de SliTaz proporciona las principales noticias del proyecto,
as� como noticias sobre la actividad general de los subproyectos en la
secci�n de la <a href="http://scn.slitaz.org/">comunidad</a>. Ambas est�n 
disponibles como un feed XML. El proyecto adem�s publica una peque�a 
revista mensual. Por �ltimo, en la <a href="../">p�gina principal</a> 
podr�s seguir las �ltimas noticias, commits y tweets.</p>

<div class="news">

<ul>
	<!-- <li><strong>Date - Title</strong>
	<p></p>
	</li> -->
	<li><strong>3 de marzo de 2012 - SliTaz 4.0-RC2 disponible</strong>
	<p>
		El equipo de SliTaz se complace en anunciar la nueva SliTaz 4.0-RC2
		release candidate. Hemos tenido mucho trabajo resolviendo bugs de la
		RC1 y de las aplicaciones caseras para usuarios finales como TazPkg,
		TazPanel y TazUsb. La conexi�n Wifi se hace m�s sencilla mediante el
		TazPanel o el nuevo Wifibox. TazPkg tiene mejor integraci�n en el
		escritorio y un nuevo sistema de notificaci�n.
	</p>
	<p>
		Esta nueva versi�n viene con un paquete Xorg completo, soporte DRI as�
		como los controladores nv, intel, geode y vesa funcionando sin
		necesidad de configurar. Tambi�n hemos rehecho todos los paquetes una
		vez m�s, ahorrando ~2MB en el LiveCD, as� que tambi�n hemos a�adido
		Lxrandr, Parcellite y el cliente bittorrent Transmission.
	</p>
	<p>
		Agradecemos a todos los que han probado la RC1. Esta RC2 nos acerca a
		la SliTaz 4.0 planeada en las pr�ximas dos semanas. Puedes descargarte
		la ISO de la RC2 de nuestro mirror (35,1 MB):
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC2.iso">SliTaz 4.0-RC2</a>
	</p>	
	</li>
	<li><strong>23 de febrero de 2012 - SliTaz 4.0-RC1 disponible</strong>
	<p>
		Al equipo de Slitaz le complace anunciar la disponibilidad inmediata
		de la primera Release Candidate de SliTaz 4.0. SliTaz puede arrancar
		en 10-12 segundos en hardware relativamente nuevo, y con la nueva ISO
		4 en 1 puedes instalar un ordenador de escritorio con todo SliTaz con
		tan s�lo 48 MB de RAM. La ISO 4 en 1 es capaz de autodetectar la
		memoria y puede arrancar SliTaz en modo texto, en un entorno X m�nimo,
		o como un escritorio gr�fico completo.
	</p>
	<p>
		SliTaz 4.0 tendr� m�s de 3000 paquetes bien testeados en el
		repositorio, y la serie RC nos permitir� hacer el seguimiento de las
		�ltimas incidencias. Desde nuestra �ltima versi�n Cooking, los
		paquetes has sido rehechos dos veces con el fin de asegurar la
		calidad.
	</p>
	<p>
		La ISO RC1 mostrar� tras el arranque un nuevo men� gr�fico, y una
		configuraci�n gr�fica del teclado y el idioma. La ISO muestra una
		nueva distribuci�n y dise�o del escritorio, as� como un instalador en
		l�nea de comandos con una interfaz CGI/Web accesible desde TazPanel.
		Te puedes descargar esta nueva ISO desde nuestro mirror:
		<a href="http://mirror.slitaz.org/iso/cooking/slitaz-4.0-RC1.iso">SliTaz 4.0-RC1</a>
	</p>	
	</li>
	
    <li><strong>31 de mayo de 2011 - Nueva y radiante Cooking 20110531</strong>
    <p>El equipo de Slitaz se enorgullece en anunciar la liberaci�n de una
    nueva versi�n Cooking hecha con nuestros nuevos y frescos paquetes de
    cookutils. Cookutils es una de las herramientas de nueva generaci�n para
    hacer paquetes de SliTaz, proporcionando un Build Bot con una agradable
    interfaz web que funciona directamente en cualquier sistema SliTaz.
    Estos nuevos paquetes se han hecho con una nueva cadena de herramientas
    optimizada para i486.</p>
    <p>
    El proceso de arranque completo ha sido mejorado y la primera
    configuraci�n de arranque se hace ahora mediante di�logos GTK en una
    sesi�n X, siendo el tiempo de arranque tambi�n m�s corto. Esta versi�n
    viene con una nueva herramienta gr�fica para la configuraci�n del
    sistema, as� como nuestro nuevo panel de configuraci�n del sistema, m�s
    conocido como TazPanel. TazPanel te permite configurar todo el sistema
    mediante una interfaz web xHTML/CSS (�til para el control remoto) y
    maneja la gesti�n de paquetes reemplazando el anterior di�logo GTK.</p>
    <p>
    Xorg tiene ahora soporte para dri, as� que libdr, linux-drm y linux-agp
    vienen ahora con la ISO base. Esto a�ade 1MB al sistema de ficheros
    comprimido. Sin embargo, nos las hemos apa�ado para ahorrar bastante
    espacio en la ISO base con nuestros nuevos paquetes, con lo que nos ha
    quedado �una Cooking de 30MB! Esta nueva Cooking tambi�n trae mejor
    internacionalizaci�n y soporte para italiano. Descarga:
    <a href="get/">slitaz-cooking.iso</a>.
    </p>
    </li>

    <li><strong>29 de marzo de 2011 - Nueva Cooking 20110329</strong>
    <p>El equipo de SliTaz se complace en anunciar la publicaci�n de una
    nueva ISO de la versi�n Cooking con alrededor de 2900 paquetes. Todos
    los paquetes han sido reconstruidos usando nuestra nueva herramienta
    de cocci�n, ahora incluida en tazwok. Contiene el n�cleo 2.6.37
    compilado contra glibc 2.13, binutils 2.21 y gcc 4.5.2. El Core LiveCD
    incluye Midori 0.3.3. Tazpkg se ha traducido por completo al franc�s y
    estamos abiertos a traducciones adicionales. Tazwok ha sido totalmente
    reescrita y es posible reconstruir SliTaz de cero usando cualquier
    ISO. Esta ISO es la primera candidata en nuestra ruta hacia la
    publicaci�n de la versi�n 4.0 estable.</p>
    <p>
    Se ha trabajado mucho desde la �ltima Cooking publicada en noviembre:
    m�s de 2200 cambios han sido registrados al wok, y algunos centenares
    m�s para las herramientas caseras. Nos complace anunciar que la
    comunidad SliTaz ha crecido mucho estos �ltimos meses: el a�o pasado
    se registraron m�s cambios que en los cuatro anteriores. A�n as�,
    cantidad no es calidad. Necesitamos tu ayuda para probar esta nueva
    ISO e informar de posibles fallos. Si lo deseas, tu ayuda es
    bienvenida para resolver problemas abiertos camino de la publicaci�n
    de la 4.0. Puedes alistarte v�a nuestro IRC, listas de correo, foros o
    directamente escribiendo un correo a los mantenedores de los paquetes.
    Confiamos que disfrutes esta <a href="get/">nueva versi�n</a>.
    </p>
    </li>    

    <li><strong>Archivo de noticias:</strong>
    <a href="news/2008.html">2008</a> |
    <a href="news/2009.html">2009</a> |
    <a href="news/">2010</a>
    </li>
</ul>

<!-- End of news -->
</div>

<h2>Actividad del proyecto</h2>
<?php
	require_once("../lib/get-feeds.php");
?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="../images/users.png" alt="users.png" /></a>
		Actividad de la comunidad
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">M�s actividad</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="../images/development.png" alt="development.png" /></a>
		�ltimos commits en el wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">M�s commits</a>
	</p>
</div>

<h2>Echa una mano</h2>
<p>
    Haz SliTaz m�s popular o haz una donaci�n. Puedes apoyarnos
    monetariamente v�a Paypal o mediante un micropago Flattr. Puedes
    bloguear, tweetear, compartir o simplemente hablar de SliTaz para
    ayudar a difundir el proyecto. Puedes tambi�n unirte al proyecto y
    compartir o involucrarte en nuestra 
    <a href="http://scn.slitaz.org/">Community Network</a>.
</p>

<?php include("../lib/html/donate.html"); ?>

<h3>Twitter &amp; Facebook</h3>

<?php include("../lib/html/social.html"); ?>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
