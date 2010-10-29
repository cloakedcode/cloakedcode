<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>
		Code Cabin<? if (isset($title)) : ?> | <?= $title ?> <? endif ?>
	</title>

	<link href='app/styles.css' type='text/css' rel='stylesheet' />
	<link href='http://fonts.googleapis.com/css?family=Cantarell&subset=latin' type='text/css' rel='stylesheet' />
</head>

<body>
	<div id='header'>
		<div id='title'>
			<a href='index.php'>Code Cabin</a>
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
	
		<div id='footer'>
			<hr/>
			<p>
				Copyright &copy; 2010 Alan Smith.
			</p>
		</div>
	</div>
	<a href="http://github.com/skrat19"><img style="position: absolute; top: 0; right: 0; border: 0;" src="http://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub" /></a>
</body>
</html>
