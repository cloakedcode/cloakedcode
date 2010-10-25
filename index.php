<?php

ini_set('date.timezone', 'America/Denver');

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
	Acorn::$vars['post'] = Post::postWithId($_GET['id']);
	Acorn::renderView('views/post');
}
else if (empty($_GET['page']) === false)
{
	Acorn::$vars['page'] = Page::pageWithId($_GET['page']);
	Acorn::renderView('views/page');
}
else
{
	Acorn::$vars['posts'] = Post::posts();
	Acorn::renderView('views/posts');
}

echo '<!--- Page took: '.(microtime(true) - $time)."-->\n";

?>
