<?
$last = count($posts) -1;
foreach ($posts as $i => $post) :
?>
<h1 class='post-title'><a href='<?= $post->id ?>'><?= $post->title ?></a></h1>
<div class='date'>Published on <?= $post->date() ?>.</div>
<div class='post-content'><?= $post->body() ?></div>

<? if ($i < $last ) : ?>
<hr/>
<? endif ?>
<? endforeach ?>
