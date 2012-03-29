<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>SliTaz (fr) - Forge</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="description" content="D�veloppement de SliTaz GNU/Linux" />
	<meta name="keywords" lang="fr" content="developpement slitaz developer GNU Linux" />
	<meta name="robots" content="index, follow, all" />
	<meta name="modified" content="2011-03-26 23:15:00" />
	<meta name="author" content="Christophe Lincoln"/>
	<link rel="shortcut icon" href="../../favicon.ico" />
	<link rel="stylesheet"  type="text/css" href="../../slitaz.css" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../../images/network.png" alt="network.png" /></a>
		<a href="http://scn.slitaz.org/">Community</a>
		<a href="http://doc.slitaz.org/">Doc</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://bugs.slitaz.org">Bugs</a>
		<a href="http://hg.slitaz.org/">Hg</a>
	</div>
	<h1><a href="http://www.slitaz.org/">SliTaz GNU/Linux</a></h1>
</div>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav">
		<h4>Navigation</h4>
		<div class="right_box">
			<ul>
				<li><a href="../mailing-list.php">Mailing List</a></li>
				<li><a href="../devel/">D�veloppement</a></li>
				<li><a href="../packages/">Paquets</a></li>
				<li><a href="../artwork/">Artwork</a></li>
				<li><a href="../search.php">Recherche</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="../">Actualit�s</a></li>
				<li><a href="../about/">A propos</a></li>
				<li><a href="../get/">T�l�chargement</a></li>
				<li><a href="../asso/">Association</a></li>
				<li><a href="../doc/">Documentation</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>Forge</h4>
		<p>
			Les outils et services utilis�s pour forger Slitaz :-)
		</p>
		<p>
			<img src="../../images/users.png" alt="users.png" />
			<a href="http://scn.slitaz.org/">Rejoingez nous sur SCN</a>
			et la <a href="../mailing-list.php">mailing list</a>
		</p>
	</div>
</div>

<!-- Content -->
<div id="content">

<h2>Gestion collaborative du d�veloppement</h2>

<ul>
	<li><a href="#kiss">KISS et respect des standards.</a></li>
	<li><a href="#tank">Build host &amp; home.</a></li>
	<li><a href="#repos">D�p�ts Mercurial.</a></li>
	<li><a href="#iconv">Impl�mentation d'iconv().</a></li>
	<li><a href="#pkgs">Paquets tazpkg.</a></li>
	<li><a href="#pkgs-naming">Nommage des paquets.</a></li>
	<li><a href="#site">Gestion du site Web et des livres.</a></li>
	<li><a href="#xhtml">xHTML coding style.</a></li>
</ul>

<p>
Le projet SliTaz dispose de divers moyens pour g�rer le travail des
d�veloppeurs et collaborer. Un syst�me de gestion de r�vision avec Mercurial
(Hg), des modules de synchronisation avec Rsync, de la documentation, une 
<a href="../mailing-list.php">liste de discussion</a> et un canal IRC. Tous
les d�veloppeurs sont inscrits sur la liste, c'est le moyen de collaboration
principal et privil�gi�.
</p>

<a name="kiss"></a>
<h3>KISS et respect des standards</h3>
<p>
Rester simple, respecter au mieux les standards, r�aliser un travail soign�,
r�diger de la documentation de haute qualit�, fournir un syst�me stable et
robuste et garder le <em>rootfs</em> du LiveCD standard assez l�ger pour que
SliTaz tourne sur des machines ayant au minimum 128 Mb de RAM. Possibilit� 
d'utiliser GTK+2, Dialog, Gtkdialog, des scripts SHell ou encore PHP pour
coder des outils propres � la distribution. L'id�e est aussi de ne pas faire
de doublons et de penser mini...
</p>
<p>
SliTaz se veut un projet proche et � l'�coute des ses utilisateurs. Il y a
plusieurs d�veloppeurs actifs sur le <a href="http://forum.slitaz.org/">forum</a>
et sur la <a href="../mailing-list.php">liste de discussion</a>.
</p>

<a name="tank"></a>
<h3>Tank - Build host &amp; home</h3>
<p>
Chaque contributeur peut avoir un compte sur le serveur principal du
projet, avec un acc�s s�curis�, de l'espace disque, un r�pertoire public
et tous les outils de d�veloppement. Les d�veloppeurs peuvent y compiler
leurs paquets et les mainteneurs du miroir s'occupent de la synchronisation.
Tank h�berge aussi le site internet, le web boot et les d�p�ts Mercurial: 
<a href="http://tank.slitaz.org/">tank.slitaz.org</a>
</p>
<p>
L'utilisation du build host est d�crite dans le Cookbook:
<a href="http://doc.slitaz.org/en:cookbook:buildhost">SliTaz Build Host (tank)</a>.
</p>

<a name="repos"></a>
<h3>D�p�ts Mercurial</h3>
<p>
Tous les sous-projets tels que Tazpkg, Tazwok ou Tazlito ont leurs propres 
d�p�ts Hg sur le serveur du projet, tout comme le wok. Les d�veloppeurs ont
un compte et des droits en �criture afin de pouvoir envoyer leurs recettes,
mises � jour ou modifications. Il est bien s�r possible de demander la cr�ation  
d'un nouveau d�p�t pour collaborer sur un nouveau sous-projet li� � SliTaz.
A noter qu'il y a 2 domaines : <a href="http://hg.slitaz.org/">hg.slitaz.org</a>
est public et <code>repos.slitaz.org</code> n�cessite une authentification, c'est-�-dire 
que vous pouvez cloner hg.slitaz.org mais pas y pousser vos changements ou fichiers.
</p>
<h4>~/.hgrc</h4>
<p>
Mercurial utilise un fichier cach� <code>~./hgrc</code> permettant de 
sp�cifier son nom d'utilisateur. Il faut mettre votre nom et adresse mail pour
qu'on sache qui a modifi� quoi. Et attention � ne pas �tre <em>root</em> pour
pousser vos modifications. Exemple :
</p>
<pre class="script">
[ui]
username = Pr�nom Nom &lt;you@example.org&gt;
</pre>
<h4>Cloner, modifier, commiter et pousser</h4>
<p>
Vous avez le choix de cloner anonymement via hg.slitaz.org ou directement avec
votre login et mot de passe. Pour cloner un d�p�t tel que le wok :
</p>
<pre>
 $ hg clone http://repos.slitaz.org/wok/
</pre>
<p>
Copier, cr�er, modifier des recettes ou des fichiers dans <code>stuff</code>. 
Avant de pouvoir pousser vos modifs, il faut les additionner � votre d�p�t 
local et les commiter. A noter que la commande <code>status</code> permet de 
savoir quels fichiers ont �t� modifi�s :
</p>
<pre>
 $ cd wok
 $ hg status
 $ hg add
 $ hg commit
</pre>
<p>
La commande <code>commit</code> va ouvrir l'�diteur de texte Nano pour �crire le message
destin� aux logs (Ctrl + X pour enregistrer et quitter). Vous pouvez �viter
Nano en utilisant l'option : <code>-m "Message"</code>. And please, 
messages in English if possible :
</p>
<pre>
 $ hg commit -m "Message for Mercurial log"
</pre>
<p>
Une fois que tout est pr�t, vous pouvez encore utiliser la commande
<code>log</code> pour voir ce qui va �tre affich� sur l'interface web. Pour 
pousser vos changements c'est <code>push</code> :
</p>
<pre>
 $ hg log
 $ hg push
</pre>
<p>
Si vous avez clon� depuis hg.slitaz.org, il faut alors pousser en sp�cifiant
le bon URL :
</p>
<pre>
 $ hg push http://repos.slitaz.org/wok/
</pre>
<h4>Mettre � jour un wok local</h4>
<p>
Pour mettre � jour votre wok local avec celui du serveur (<em>pull</em> pour
tirer les changements) :
</p>
<pre>
 $ hg pull
 $ hg update
</pre>
<h4>Commandes utiles</h4>
<p>
Des commandes hg qui peuvent servir.
</p>
<ul>
	<li><code>hg help</code> : affiche la liste compl�te des commandes.</li>
	<li><code>hg rollback</code> : annule la derni�re action ex�cut�e (commit,
	pull, push).</li>
	<li><code>hg log &lt;paquet&gt;</code> : affiche les logs pour un paquet.</li>
	<li><code>hg head</code> : affiche le dernier log.</li>
</ul>

<a name="iconv"></a>
<h3>Impl�mentation d'iconv()</h3>
<p>
SliTaz utilise iconv() fourni par la GNU glibc, m�me si certain paquets
proposent d'utiliser <code>libiconv</code> il faut utiliser la version de
la glibc (paquet <code>glibc-locale</code>). Il n'y a donc pas de paquet 
libiconv (1,2 Mb) dans SliTaz.
</p>

<a name="pkgs"></a>
<h3>Paquets tazpkg</h3>
<p>
Les paquets tazpkg de SliTaz sont cr��s automatiquement via Tazwok et les
recettes contenues dans le wok, <a href="http://doc.slitaz.org/fr:cookbook:start">le Cookbook</a>
d�crit <a href="http://doc.slitaz.org/fr:cookbook:wok">l'utilisation des outils SliTaz</a> 
et le format des <a href="http://doc.slitaz.org/fr:cookbook:receipt">recettes</a>,
c'est sans doute par un petit peu de lecture qu'il faut commencer.
</p>
<p>
Concernant le choix des paquets, l'id�e est de proposer un paquet par t�che ou 
fonctionnalit�, c'est � dire pas (trop) de doublons et de trouver 
l'application la plus l�g�re dans son domaine. A noter que les paquets actuels
ne sont pas fig�s, si vous trouvez une alternative � un paquet existant, �tant
plus l�g�re, ayant plus de fonctionnalit�s ou �tant plus <em>sexy</em> pour
quelques Ko suppl�mentaires, vous pouvez la proposer sur la liste. Une 
attention particuli�re est port�e aux paquets destin�s au LiveCD : strip,
suppression de tout ce qui est inutile, d�pendances et options de compilation.
En g�n�ral, les paquets candidats pour le corps du LiveCD sont discut�s sur
la liste.
</p>
<p>
Avant de commencer � compiler et cr�er des paquets pour SliTaz, assurez-vous 
qu'une recette n'existe pas dans le wok undigest, disponible sur le miroir
principal de SliTaz. N'oubliez pas non plus que les membres de la liste sont
l� pour vous aider et que pour bien commencer, <a href="http://doc.slitaz.org/fr:cookbook:wok"
>la documentation du wok et des outils</a> existe.
</p>

<a name="pkgs-naming"></a>
<h3>Nommage des paquets</h3>
<p>
Dans la majorit� des cas le nom du paquet est celui des sources exception
faite des modules Python, Perl, PHP, Ruby, Lua. Par example le paquet Kid
fournissant un syst�me de template XML et �crit en Python se nomme:
<code>python-kid</code>.
</p>

<a name="site"></a>
<h3>Gestion du site Web et des livres</h3>
<p>
La gestion du site et des livres (Handbook et Cookbook) est faite via un 
d�p�t Mercurial, ce qui nous permet de traviller � plusieurs. Il faut
juste installer <code>mercurail</code> sur SliTaz et conna�tre les commandes
de base. Une fois le d�p�t clon� vous avez une copie compl�te du site en
local pour commencer � travailler. Pour cloner le site web :
</p>
<pre>
 $ hg clone http://hg.slitaz.org/website
</pre>
<p>
Si vous avez les droits :
</p>
<pre>
 $ hg clone http://repos.slitaz.org/website
</pre>
<p>
Sur SliTaz vous pouvez installer le serveur web Lighttpd et mettre le
site dans votre r�pertoire ~/Public, cela permet de naviguer dans votre
copie locale via localhost/~user.
</p>

<a name="xhtml"></a>
<h3>xHTML coding style</h3>
<p>
Les pages du site et des diff�rents <em>books</em> sont cod�s en xHTML 1.0
Transitional, les couleurs pour le <code>body</code> et les titres sont
directement mis dans la page, cela permet d'avoir une pr�sentation plus soign�e
pour Links. Le titre de niveau 1 est utilis� une seule fois en haut de page,
le titre 2 correspond au titre du document et les titres de niveau 3 et 4 sont
ensuite utilis�s pour les sous-titres. Si il y a lieu d'avoir une liste � puces
avec des ancres, elle se met en haut juste apr�s le titre de niveau 2. Les
paragraphes sont contenus dans les balises <code>&lt;p&gt;&lt;/p&gt;</code>.
Pour indenter, nous utilisons des tabulations, elles ont une raison d'�tre
s�mantique et prennent moins de place en terme d'octets. Pour mettre
du code tel que le nom d'une commande dans un paragraphe, la balise
<code>&lt;code&gt;</code> est recommand�e. Pour afficher une ou des commandes
� lancer dans un terminal, les pages du site utilisent la balise
<code>&lt;pre&gt;</code> permettant d'afficher du texte pr�format�. Exemple :
</p>
<pre>
 $ command
</pre>
<p>
Pour afficher du texte � copier/coller tels que des scripts, des bouts de
code, des exemples de fichiers de configuration, etc, c'est aussi la balise
<code>&lt;pre&gt;</code> mais avec une classe CSS nomm�e "script". Exemple:
</p>
<pre class="script">
&lt;pre class="script"&gt;

code...

&lt;/pre&gt;
</pre>
<p>
Les mots en <em>English</em> se mettent dans la balise <code>&lt;em&gt;</code>
et les liens internes sont relatifs. Penser � v�rifier la validit� du code via
le <em>validator</em> en ligne du W3C.
</p>

<h3>Diff et patch</h3>
<p>
Les utilitaires <code>diff</code> et <code>patch</code> sont des outils en
ligne de commande permettant de cr�er et d'appliquer un fichier contenant
les diff�rences entre deux fichiers. Cette technique est souvent utilis�e
pour collaborer et permet d'extraire clairement les modifications apport�es
au fichier original. Pour cr�er un fichier <code>diff</code> lisible par
les humains dans un simple �diteur de texte, il faut utiliser l'option
<code>-u</code> en argument :
</p>
<pre>
 $ diff -u file.orig file.new > file.diff
</pre>
<p>
Pour appliquer un patch :
</p>
<pre>
 $ patch file.orig file.diff
</pre>

<!-- End of content -->
</div>

<!-- Footer -->
<div id="footer">
	Copyright &copy; <span class="year"></span>
	<a href="http://www.slitaz.org/">SliTaz</a> - Network:
	<a href="http://scn.slitaz.org/">Community</a>
	<a href="http://doc.slitaz.org/">Doc</a>
	<a href="http://forum.slitaz.org/">Forum</a>
	<a href="http://pkgs.slitaz.org/">Packages</a>
	<a href="http://bugs.slitaz.org">Bugs</a>
	<a href="http://hg.slitaz.org/">Hg</a>
	<p>
		SliTaz @
		<a href="http://twitter.com/slitaz">Twitter</a>
		<a href="http://www.facebook.com/slitaz">Facebook</a>
		<a href="http://distrowatch.com/slitaz">Distrowatch</a>
		<a href="http://en.wikipedia.org/wiki/SliTaz">Wikipedia</a>
		<a href="http://flattr.com/profile/slitaz">Flattr</a>
	</p>
</div>

</body>
</html>

