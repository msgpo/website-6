<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>SliTaz GNU/Linux</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="SliTaz GNU/Linux LiveCD operating system" />
    <meta name="keywords" lang="en" content="slitaz, gnu, linux, opensource, livecd, live usb" />
    <meta name="robots" content="index, follow, all" />
    <meta name="modified" content="<?php echo (date( "Y-m-d H:i:s", getlastmod())); ?>" />
    <meta name="author" content="Christophe Lincoln" />
    <meta name="verify-v1" content="qieECDfB5l+EBkG8QMNuHOGfol0/MEe4U22/4iVupNw=" />
	<link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="slitaz.css" />
    <link rel="alternate" type="application/rss+xml" title="SliTaz Website feed" href="en/rss.xml" />
    <link rel="alternate" type="application/atom+xml" title="SliTaz Labs feed" href="http://labs.slitaz.org/news?format=atom" />
    <link rel="alternate" type="application/rss+xml" title="SliTaz SCN feed" href="http://scn.slitaz.org/rss.xml" />
    <script type="text/javascript">
	/* <![CDATA[ */
	    (function() {
	        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
	        s.type = 'text/javascript';
	        s.async = true;
	        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
	        t.parentNode.insertBefore(s, t);
	    })();
	/* ]]> */
	</script>
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="./netmap.php">
			<img src="images/network.png" alt="network.png" /></a>
		<a href="http://scn.slitaz.org/">Community</a>
		<a href="http://doc.slitaz.org/">Doc</a>
		<a href="http://forum.slitaz.org/">Forum</a>
		<a href="http://labs.slitaz.org/issues">Bugs</a>
		<a href="http://hg.slitaz.org/">Hg</a>
	</div>
	<h1><a href="http://www.slitaz.org/">SliTaz GNU/Linux</a></h1>
</div>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav" style="text-align: center; padding: 10px;">
		<?php include("libs/random-image.php"); ?>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>About SliTaz</h4>
		<p>
			SliTaz is an open source and free operating system providing
			a fully featured desktop or server in less than 30 MB. SliTaz
			is simple to use, fast and stable. We have an active community
			and contributors from all over the world making SliTaz finer
			every day. 
		</p>
		<div class="button">
			Quick Download:
			<a href="http://mirror.slitaz.org/iso/3.0/slitaz-3.0.iso">SliTaz 3.0</a>
			<a href="http://mirror.slitaz.org/iso/cooking/slitaz-cooking.iso">SliTaz Cooking</a>
		</div>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="i18n.php"><img src="images/locale.png" alt="locale.png" /></a>
	<a href="de/">Deutsch</a>
	<a href="en/">English</a>
	<a href="es/">Español</a>
	<a href="fr/">Français</a>
	<a href="id/">Indonesian</a>
	<a href="pt/">Português</a>
	<a href="cn/">Chinese</a>
</div>

<!-- Content -->
<div id="content">

<!-- For the main index with slideshow we keep block_nav and block_top
     at min-height: 220px; -->

<!-- We just keep the last 4 web site news -->
<div id="news">

<h2>Latest news</h2>

<ul>
	<li><strong><a href="en/#news">29 March 2011 - New Cooking 20110329</a></strong></li>
	<li><strong><a href="en/#20101104">4 November 2010 - New Cooking 20101104</a></strong></li>
	<li><strong>8 May 2010 - Summer of Documentation</strong></li>
	<li><strong>28 March 2010 - SliTaz GNU/Linux 3.0 released</strong></li>
	<li><strong>14 March 2010 - RC series and Solutionslinux 2010 (Paris)</strong></li>
</ul>

<!-- End of news -->
</div>

<h2>Project Activity</h2>
<?php
	require_once("libs/get-feeds.php");
?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img 
			src="images/users.png" alt="users.png" /></a>
		Community activity
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">More activity</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/">
			<img src="images/development.png" alt="development.png" /></a>
		Latest commits in wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/">More commits</a>
	</p>
</div>

<h2>Latest Tweet</h2>
<div id="twitter">
	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script>
	new TWTR.Widget({
	  version: 2,
	  type: 'profile',
	  rpp: 4,
	  interval: 6000,
	  width: '100%',
	  height: 200,
	  theme: {
	    shell: {
	      background: '#eaeaea',
	      color: '#000000'
	    },
	    tweets: {
	      background: '#ffffff',
	      color: '#000000',
	      links: '#3a4885'
	    }
	  },
	  features: {
	    scrollbar: false,
	    loop: false,
	    live: false,
	    hashtags: true,
	    timestamp: true,
	    avatars: false,
	    behavior: 'all'
	  }
	}).render().setUser('slitaz').start();
	</script>
</div>

<h2>Spread SliTaz</h2>
<p>
	One way to help the project is to make SliTaz even more popular.
	Blog, Tweet this page, share and talk about the project. SliTaz
	is also social, you can join us, share artwork or post a blog on the 
	<a href="http://scn.slitaz.org/">SliTaz Community Network</a>,
	"Like" the official SliTaz Facebook page and get involved!
</p>

<!-- Twitter Button -->
<div style="margin-bottom: 10px;">
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<a href="http://twitter.com/share" class="twitter-share-button" 
		data-text="SliTaz GNU/Linux" 
		data-count="horizontal"
		data-via="slitaz">Tweet</a>
</div>

<!-- Like Button -->
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:like 
	href="http://www.facebook.com/pages/SliTaz/125559834176383"
	show_faces="true" width="auto">
</fb:like>

<h2>Monetary support</h2>
<p>
	SliTaz is made by volunteers and there is no company behind
    the project, but we desperately need some money to maintain the
    project infrastructure and services such as the main server and
    build host. You can help with a micropayment via Flattr or a 
    Paypal donation to the SliTaz <a href="en/asso/">Association</a>,
    that way we can keep our freedom and autonomy without having any
    ads on our sites.
</p>
<div>
	<!-- PayPal Button -->
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post"
		style="display: inline;">
		<input type="hidden" name="cmd" value="_s-xclick" />
		<input type="hidden" name="hosted_button_id" value="4885025" />
		<input type="image" src="images/paypal.png" name="submit" 
			alt="PayPal - The safer, easier way to pay online!" />
	</form>
	<!-- Flattr Button -->
	<a class="FlattrButton" style="display:none;" rev="flattr;button:compact;"
		href="http://www.slitaz.org/"></a>
</div>

<h2>Internationalization</h2>
<p>
The SliTaz web site is available in several languages and maintained by the
<a href="i18n.php">internationalization</a> team (i18n). Help is often
needed and you're welcome to join us if you would like to see the website
translated into your language.
</p>
<p>
	<img src="images/users.png" alt="users.png" />
	<a href="http://scn.slitaz.org/groups/i18n/">Join i18n group on SCN</a>
</p>

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
	<a href="http://labs.slitaz.org/issues">Bugs</a>
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
