<?
$last = count($posts) -1;
foreach ($posts as $i => $post) :
?>
<h2 class='post-title'><a href='<?= $post->id ?>'><?= $post->title ?></a></h2>
<span class='date'>(<?= $post->date() ?>)</span>
<div class='post-content'><?= $post->body() ?></div>

<? if ($i < $last ) : ?>
<hr/>
<? endif ?>
<? endforeach ?>
