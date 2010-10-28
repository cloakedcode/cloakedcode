<?
$last = count($posts) -1;
foreach ($posts as $i => $post) :
?>
<h2 class='post-title'><a href='<?= $post->id ?>'><?= $post->title ?></a></h2>
<div class='date'>Written on <?= $post->date() ?>.</div>
<?= $post->body() ?>
<? if ($i < $last ) : ?>
<hr/>
<? endif ?>
<? endforeach ?>
