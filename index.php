<?php

ini_set('date.timezone', 'America/Denver');

/*
 * Start up Acorn
 *
 */

define('ROOT_DIR', '.');
require('app/acorn.php');

Acorn::$include_paths[] = 'app';

$time = microtime(true);

Acorn::$vars['menu'] = Page::menuItems();

/*
 * Get the post(s)
 *
 */

if (empty($_GET['id']) === false)
{
	$p = Post::postWithId($_GET['id']);

	Acorn::$vars['post'] = $p;
	Acorn::$vars['title'] = $p->title;
	Acorn::renderView('views/post');
}
else if (empty($_GET['page']) === false)
{
	$p = Page::pageWithId($_GET['page']);

	Acorn::$vars['page'] = $p;
	Acorn::$vars['title'] = $p->title;
	Acorn::renderView('views/page');
}
else
{
	Acorn::$vars['posts'] = Post::posts();
	Acorn::renderView('views/posts');
}

echo '<!--- Page took: '.(microtime(true) - $time)."-->\n";

?>
