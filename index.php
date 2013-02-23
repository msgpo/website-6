<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>SliTaz GNU/Linux</title>
	<meta name="description" content="SliTaz GNU/Linux LiveCD operating system" />
	<meta name="keywords" lang="en" content="slitaz, gnu, linux, opensource, livecd, live usb" />
	<meta name="author" content="Christophe Lincoln" />
	<meta name="verify-v1" content="qieECDfB5l+EBkG8QMNuHOGfol0/MEe4U22/4iVupNw=" />
	<?php include("lib/html/meta-link.html"); ?>
	<!-- Link to Forum and SCN feed -->
	<link rel="alternate" type="application/rss+xml" title="SliTaz Forum Feed" href="http://forum.slitaz.org/rss" />
	<link rel="alternate" type="application/rss+xml" title="SliTaz SCN Feed" href="http://scn.slitaz.org/feed/" />
</head>
<body>

<?php
include("config.php");
include("lib/html/header.html");
?>

<!-- Block -->
<div id="block">
	<!-- Navigation -->
	<div id="block_nav" style="text-align: center; padding: 10px;">
		<?php include("lib/random-image.php"); ?>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>About SliTaz</h4>
		<p>
			SliTaz is an open source and free operating system providing
			a fully featured desktop or server in less than 35 MB. SliTaz
			is simple to use, fast and stable. We have an active community
			and contributors from all over the world making SliTaz finer
			every day.
		</p>
		<div class="button" style="text-align: left;">
			Download:
			<?php echo "<a href='$stable_iso'>SliTaz $stable_ver</a>
				<a href='$cooking_iso'>SliTaz $cooking</a>"; ?>
		</div>
	</div>
</div>

<?php include "lib/lang.php" ?>

<!-- Content -->
<div id="content">

<div class="box-up">
	<p>
		Help us get a <a href="http://www.gofundme.com/3ql70">dedicated server</a>,
		and check out our <a href="http://usbkey.slitaz.org/">USB Key Project</a>!
	</p>
</div>

<!-- Featured sponsor -->
<div id="sponsor">
	<p><strong>Featured sponsor</strong></p>
	<?php include("lib/rand-sponsor.php"); ?>
	<p><a href="/en/sponsor/">Become a sponsor</a></p>
</div>

<!-- We just keep the last 5 web site news -->
<div class="news" style="margin-right: 220px;">

<h2>Latest News</h2>

<ul>
	<li><strong><a href="en/#d20120410">SliTaz 4.0 Release</a></strong>
		<span>— 10 Apr 2012</span></li>
	<li><strong><a href="en/#d20120303">SliTaz 4.0 RC2 is out</a></strong>
		<span>— 03 Mar 2012</span></li>
	<li><strong><a href="en/#d20120223">SliTaz 4.0 RC1 is out</a></strong>
		<span>— 23 Feb 2012</span></li>
	<li><strong><a href="en/news/#d20110531">New and fresh Cooking 20110531</a></strong>
		<span>— 31 May 2011</span></li>
	<li><strong><a href="en/news/#d20110329">New Cooking 20110329</a></strong>
		<span>— 29 March 2011</span></li>
</ul>

<!-- End of news -->
</div>

<h2>Project Activity</h2>

<?php require_once("lib/get-feeds.php"); ?>

<div class="activity">
	<p>
		<a href="http://scn.slitaz.org/activity/"><img
			src="images/users.png" alt="*" /></a>
		Community activity
		<?php get_feed("scn.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://scn.slitaz.org/activity/">More activity</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://forum.slitaz.org/"><img
			src="/images/support.png" alt="*" /></a>
		Forum activity
		<?php get_feed_forum("forum.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://forum.slitaz.org/">More support</a>
	</p>
</div>

<div class="activity">
	<p>
		<a href="http://hg.slitaz.org/?sort=lastchange"><img
			src="images/development.png" alt="*" /></a>
		Latest commits in wok
		<?php get_feed("wok.xml"); ?>
	</div>
	<p class="activity_more">
		<a href="http://hg.slitaz.org/?sort=lastchange">More commits</a>
	</p>
</div>

<h2>Blog Posts</h2>

<div class="news">
	<?php get_feed_blog("blog.xml"); ?>
</div>

<h2>Latest Tweet</h2>

<div id="twitter">
	<script type="text/javascript"
		src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script type="text/javascript">
	new TWTR.Widget({
	  version: 2,
	  type: 'profile',
	  rpp: 4,
	  interval: 6000,
	  width: '100%',
	  height: 200,
	  theme: {
	    shell: {
	      background: '#efefef',
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

<?php include("lib/html/social.html"); ?>

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

<?php include("lib/html/donate.html"); ?>

<h2>Internationalization</h2>

<p>
The SliTaz web site is available in several languages and maintained by the
<a href="i18n.php">internationalization</a> team (i18n). Help is often
needed and you're welcome to join us if you would like to see the website
translated into your language.
</p>
<p>
	<img src="images/users.png" alt="*" />
	<a href="http://scn.slitaz.org/groups/i18n/">Join i18n group on SCN</a>
</p>

<!-- End of content -->
</div>

<?php include("lib/html/footer.html"); ?>

</body>
</html>
