<?php

date_default_timezone_set('UTC');

/*
 * Start up Acorn
 *
 */

define('ROOT_DIR', '.');
require('app/acorn.php');

Acorn::$include_paths[] = 'app';

$posts = Post::posts();

$home = "http://{$_SERVER['HTTP_HOST']}".dirname($_SERVER['REQUEST_URI']);

header("Content-Type: application/xml");

echo "<?xml version='1.0' ?>\n" ?>
<rss version="2.0">
	<channel>
		<title>Cloaked Code RSS Feed</title>
		<link><?php echo $home ?></link>
		<description></description>
		<language>en-us</language>

	<?php  foreach ($posts as $p) : ?>
		<item>
			<title><?php echo $p->title ?></title>
			<link><?php echo $home.$p->id ?></link>
			<description><?php echo "<h1>{$p->title}</h1>".$p->body() ?></description>
			<pubDate><?php echo date("D\, j M Y G:i:s T", $p->date) ?></pubDate>
			<guid><?php echo $home.$p->id ?></guid>
		</item>
	<?php endforeach ?>
	</channel>
</rss>

