<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>SliTaz - Lista de correo</title>
	<meta name="description" content="slitaz users developers mailing list"/>
	<meta name="keywords" content="slitaz list mail discuss" lang="es"/>
	<meta name="author" content="Eduardo Suarez-Santana"/>
	<?php include("../lib/html/meta-link.html"); ?>
</head>
<body>

<?php include("../lib/html/header.html"); ?>

<!-- Block -->
<div id="block">
	<?php include("../lib/html/nav.es.html"); ?>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Lista de correo</h4>
		<p>
			SliTaz contributors discussions and announcements (inc.
			support and development). All this is part of the mailing
			list - Join now to get help or involved in the project.
		</p>
		<p>
			<img src="/images/users.png" alt="[ ]" />
			Also you can <a href="http://scn.slitaz.org/">join us on SCN</a>
			and the support <a href="http://forum.slitaz.org/">forum</a> or:
		</p>
		<?php include("../lib/html/follow.html"); ?>
	</div>
</div>

<?php include("../lib/lang.php"); ?>

<!-- Content -->
<div id="content">

<h2>Lista de SliTaz</h2>

<ul>
	<li><a href="mailing-list.php#about">Acerca de la lista</a> - Soporte y desarrollo.</li>
	<li><a href="mailing-list.php#usage">Usando la lista</a> - Suscribirse/darse de baja y otros comandos.</li>
	<li><a href="mailing-list.php#archives">Archivo de la lista</a> - Leer y buscar en los mensajes archivados.</li>
</ul>

<h3 id="about">Acerca de la lista</h3>

<p>
La lista de discusión/distribución es el principal medio de comunicación
de la comunidad SliTaz. La lista está abierta a cualquiera. Eres libre
de suscribirte y desuscribirte cuando quieras. Es un medio efectivo para
la colaboración y para proporcionar soporte técnico a los usuarios de
SliTaz. Desarrolladores, usuarios avanzados, correctores, etc usan la
misma lista para contribuir al desarrollo del proyecto. El uso conjunto
nos permite alcanzar una mayor audiencia con soluciones más rápidas y
precisas. A pesar de ello, los miembros de la lista son todos
voluntarios y aportan lo que pueden como parte de su tiempo libre. Por
tanto, cortesía, educación y humor son siempre bienvenidos.
</p>
<p>
La lista de correo se usa para enviar y recibir mensajes. Esto significa
que todos los miembros registrados pueden enviar a la lista y recibir
todos los mensajes enviados por otros. Los mensajes son enviados por el
motor de listas de <a href="http://www.tuxfamily.org/">TuxFamily</a>,
que funciona basado en el excelente <a href="http://www.vhffs.org/">VHFFS</a>.
</p>

<h4>Civismo</h4>

<p>
La lista de correo se usa por gente a la vez apasionada y sensible. Haz
un esfuerzo por tratar a los demás con respeto, aunque a veces te puedas
sentir incómodo. Evita postear críticas destructivas en cualquier caso.
En su lugar, si entiendes que alguien no se comporta correctamente
contacta algún desarrollador.
</p>

<h3 id="usage">Usando la lista</h3>

<p>
Para poder usar la lista debes suscribirte primero. Con la suscripción
recibirás un mensaje con un número de confirmación que deberás devolver
a los  administradores de la lista (para evitar spam). Una vez que se
reciba tu confirmación, ya puedes enviar y recibir mensajes de la lista.
Fíjate que tu programa de correo puede filtrar los mensajes y enviarlos
a una carpeta específica. Para no perder el hilo de las discusiones, en
general usa "Reply" para contestar un mensaje.
</p>
<ul>
	<li>Correo de administración :
	<a href="mailto:slitaz-request@lists.tuxfamily.org">slitaz-request@lists.tuxfamily.org</a></li>
	<li>Suscríbete escribiendo en el campo "asunto" : subscribe</li>
	<li>Date de baja escribiendo en el asunto : unsubscribe</li>
	<li>Ayuda escribiendo en el asunto : help</li>
	<li>Correo para enviar un mensaje :
	<a href="mailto:slitaz@lists.tuxfamily.org">slitaz@lists.tuxfamily.org</a></li>
</ul>

<h4>Formato</h4>

<p>
Los mensajes deben enviarse en texto plano y no en HTML, justificando
las líneas a 72-80 caracteres, para que quien use un cliente de correo
en modo texto pueda leerlos. Este formato en general lo hacen
automáticamente los clientes de correo. Se recomienda eliminar las citas
innecesarias y no adjuntar ficheros demasiado grandes.
</p>

<h3 id="archives">Archivos de la lista</h3>

<p>
La lista de correo es un foro público, con todos los mensajes archivados
y disponibles en línea. Esto permite a los que no están registrados
seguir la lista, además de ser una fuente de información valiosa para
temas concretos. La lista se archiva cada noche y puedes fácilmente
navegar en el archivo mediante el motor de listas de TuxFamily. Los
mensajes se ordenan por mes y día o por hilo de discusión:
<a href="http://listengine.tuxfamily.org/lists.tuxfamily.org/slitaz/">Archivos de
la Lista de Correo.</a>
</p>

<div>
<object type="text/html" width="100%" height="345" data="../lib/archives.php?lang=es">
</object>
</div>

<!-- End of content -->
</div>

<?php include("../lib/html/footer.html"); ?>

</body>
</html>
