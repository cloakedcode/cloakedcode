<?php $plain = (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'plain') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		Cloaked Code<? if (isset($title)) : ?> | <?= $title ?> <? endif ?>
	</title>

	<link href='/css/<?php echo ($plain) ? 'plain' : 'styles' ?>.css' type='text/css' rel='stylesheet' />
	<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="/css/prettify.css" />
	
	<link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/CloakedCode" title="Cloaked Code RSS Feed" />

	<script type="text/javascript" src="/js/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="/js/prettify.js"></script>
        
        <script>
            $(document).ready(function() {
                prettyPrint();
            });
        </script>
</head>

<body>
	<div id='header'>
		<div id='logo'>
			<a href='index.php'><img src='/imgs/<?php echo ($plain) ? 'black-logo' : 'logo' ?>.png' alt='Cloaked Code' /></a>
		</div>
		<div id='nav'>
			<ul>
				<? $last = count($menu) - 1 ?>
				<? foreach ($menu as $i => $item) : ?>
				<li><a href='<?= $item['id'] ?>'><?= $item['title'] ?></a></li>
				<? if ($i !== $last) : ?>
				|
				<? endif ?>
				<? endforeach ?>
			</ul>
		</div>
		<div id='theme'>
			<a href='#' onclick="document.cookie = 'theme=plain'; document.location.reload();">Plain</a>
			|
			<a href='#' onclick="document.cookie = 'theme=dark'; document.location.reload();">Dark</a>
		</div>
	</div>

	<div id='content'>
		<?= Acorn::$view_contents ?>
	</div>

	<div id='footer'>
		<p>
			Copyright &copy; 2010 Cloaked Code. <a href="http://feeds.feedburner.com/CloakedCode" title="Subscribe to my RSS feed!"><img src="feed.png" /></a>
		</p>
	</div>
    <!--<a href="http://github.com/you"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://assets1.github.com/img/abad93f42020b733148435e2cd92ce15c542d320?repo=&url=http%3A%2F%2Fs3.amazonaws.com%2Fgithub%2Fribbons%2Fforkme_right_green_007200.png&path=" alt="Fork me on GitHub"></a>-->

	<script type="text/javascript" src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

	<script type="text/javascript">
			$(document).ready(function() {
				$('a.fancybox').fancybox({ 'titlePosition' : 'over', 'transitionIn' : 'fade' });
			});
 	</script>

	<script type="text/javascript">
		var pkBaseURL = '/tracker/'; //(("https:" == document.location.protocol) ? "/piwik/" : "/piwik/");
		document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
		</script><script type="text/javascript">
			try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
			piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
		} catch( err ) {}
	</script><noscript><p><img src="/tracker/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
	
</body>
</html>
