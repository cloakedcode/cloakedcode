<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		Cloaked Code<? if (isset($title)) : ?> | <?= $title ?> <? endif ?>
	</title>

	<link href='app/styles.css' type='text/css' rel='stylesheet' />
	
	<link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/CloakedCode" title="Cloaked Code RSS Feed" />
</head>

<body>
	<div id='header'>
		<div id='title'>
			<a href='index.php'>Cloaked Code</a>
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
	</div>

	<div id='content'>
		<?= Acorn::$view_contents ?>
	</div>

	<div id='footer'>
		<p>
			Copyright &copy; 2010 Cloaked Code. <a href="http://feeds.feedburner.com/CloakedCode" title="Subscribe to my RSS feed!"><img src="feed.png" /></a>
		</p>
	</div>
    <a href="http://github.com/you"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://assets1.github.com/img/71eeaab9d563c2b3c590319b398dd35683265e85?repo=&url=http%3A%2F%2Fs3.amazonaws.com%2Fgithub%2Fribbons%2Fforkme_right_gray_6d6d6d.png&path=" alt="Fork me on GitHub"></a>
</body>
</html>
