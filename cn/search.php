<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cn" lang="cn">
<head>
	<title>SliTaz - 搜索</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="SliTaz GNU/Linux 自定义搜索引擎" />
    <meta name="keywords" lang="cn" content="about slitaz, gnu, linux, mini distro, livecd, 关于Slitaz, Slitaz是什么, 介绍" />
	<meta name="robots" content="index, follow, all" />
    <meta name="modified" content="2011-03-26 13:15:00" />
    <meta name="author" content="Draplater" />
	<link rel="shortcut icon" href="../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../slitaz.css" />
</head>
<body>

<!-- Header -->
<div id="header">
	<div id="logo"></div>
	<div id="network">
		<a href="http://www.slitaz.org/netmap.php">
			<img src="../images/network.png" alt="network.png" /></a>
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
		<h4>导航</h4>
		<div class="right_box">
			<ul>
				<li><a href="../en/mailing-list.php">邮件列表 (en)</a></li>
				<li><a href="../en/devel/">开发 (en)</a></li>
				<li><a href="packages/">软件包</a></li>
				<li><a href="artwork/">美工</a></li>
				<li><a href="search.php">搜索</a></li>
			</ul>
		</div>
		<div class="left_box">
			<ul>
				<li><a href="./">头条</a></li>
				<li><a href="about/">关于</a></li>
				<li><a href="get/">下载</a></li>
				<li><a href="../en/asso/">捐赠 (en)</a></li>
				<li><a href="doc/">文档</a></li>
			</ul>
		</div>
	</div>
	<!-- Information/image -->
	<div id="block_info">
		<h4>搜索</h4>
		<p>
			这个网页可以搜索Slitaz网站、邮件列表、论坛中的内容。
			这个网页由Google自定义搜索为Slitaz创建。
		</p>
	</div>
</div>

<!-- Languages -->
<div id="lang">
	<a href="../i18n.php"><img src="../images/locale.png" alt="Locale:" /></a>
	<a href="../da/search.php">Dansk</a>
	<a href="../de/search.php">Deutsch</a>
	<a href="../en/search.php">English</a>
	<a href="../es/search.php">Español</a>
	<a href="../fr/search.php">Français</a>
	Indonesian
	Italiano
	<a href="../pt/search.php">Português</a>
	<a href="../ru/search.php">Русский</a>
	<b>中文</b>
</div>

<!-- Content -->
<div id="content">

<div class="searchbox">
	<div id="cse-search-form" style="width: 100%;">Loading</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
	  google.load('search', '1', {language : 'cn', style : google.loader.themes.MINIMALIST});
	  google.setOnLoadCallback(function() {
	    var customSearchControl = new google.search.CustomSearchControl('000868395082919927601:nddq7yjdcxg');
	    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	    var options = new google.search.DrawOptions();
	    options.setSearchFormRoot('cse-search-form');
	    customSearchControl.draw('cse', options);
	  }, true);
	</script>
	<style type="text/css">
		input.gsc-search-button {
		   border: 1px solid #b64b22;
			background-color: #b64b22;
			color: white;
			font-weight: bold;
			cursor: pointer;
			padding: 3px 10px;
			font-size: 14px;
			margin-left: -2px;
			-webkit-border-top-right-radius: 4px;
			-webkit-border-bottom-right-radius: 4px;
			-moz-border-radius-topright: 4px;
			-moz-border-radius-bottomright: 4px;
			border-top-right-radius: 4px;
			border-bottom-right-radius: 4px;
		}
		.gs-webResult.gs-result a.gs-title:link,
		.gs-webResult.gs-result a.gs-title:link b {
			color: #103a5e;
		}
		#cse { margin-bottom: 120px; }
	</style>
</div>

<div id="cse" style="width:100%;"></div>

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