<?php

/*
 * Loop through the posts and diplay 'em
 *
 */

foreach ($posts as $post)
{
	$date = $post->date();
	$body = $post->body();
echo <<<EOT
<h2><a href='?id={$post->id}'>{$post->title}</a></h2>
<small>Written on {$date}.</small>
<br/>
{$body}
<hr/>
EOT;
}

if (isset($_GET['id']))
{
}

?>
