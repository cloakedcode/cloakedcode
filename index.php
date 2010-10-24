<html>
<head>
	<title>Skrat's Blog</title>

	<style>
		h2 {
			margin-bottom: 3px;
		}

		p {
			margin-top: 3px;
		}
	</style>
</head>

<body>
<?php

ini_set('date.timezone', 'America/New_York');

/*
 * Start up Acorn
 *
 */

define('ROOT_DIR', '.');
require('acorn.php');

$time = microtime(true);

/*
 * Get the post(s)
 *
 */

if (empty($_GET['id']) === false)
{
	$posts = array(Post::postWithId($_GET['id']));
}
else
{
	$posts = Post::posts();
}

/*
 * Loop through the post(s) and diplay 'em
 *
 */

foreach ($posts as $post)
{
	$link = (isset($_GET['id']) && $_GET['id'] == $post->id) ? $post->title : "<a href='?id={$post->id}'>{$post->title}</a>";
	$date = date('l, \t\h\e jS \of F, Y', $post->date);
	$body = $post->body();
echo <<<EOT
<h2>{$link}</h2>
<p>
<small>Written on {$date}.</small>
<br/>
{$body}
</p>
<hr/>
EOT;
}

if (isset($_GET['id']))
{
	echo "<a href='index.php'>Go back to full listing</a>";
}

echo '<!--- Page took: '.(microtime(true) - $time).'-->';

?>
</body>
</html>
