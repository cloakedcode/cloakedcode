<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Code Cabin</title>

	<link href='app/styles.css' type='text/css' rel='stylesheet' />
	<link href='http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT:regular,italic' type='text/css' rel='stylesheet' />
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
				<li><a href='?page=<?= $item['id'] ?>'><?= $item['name'] ?></a></li>
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

</body>
</html>
