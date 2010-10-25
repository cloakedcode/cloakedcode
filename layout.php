<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Code Cabin</title>

	<link href='styles.css' type='text/css' rel='stylesheet' />
</head>

<body>
	<div id='header'>
		<div id='title'>
			<a href='index.php'>Code Cabin</a>
		</div>
		<div id='nav'>
			<ul>
				<li><a href='?page=about'>About</a></li>
				|
				<li><a href='?page=projects'>Projects</a></li>
			</ul>
		</div>
	</div>

	<div id='content'>
		<?= Acorn::$view_contents ?>
	</div>

</body>
</html>
