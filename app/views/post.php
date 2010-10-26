<h2><?= $post->title ?></h2>
<div class='date'>Written on <?= $post->date() ?>.</div>
<?= $post->body() ?>

<hr/>

<div id="disqus_thread"></div>
<script type="text/javascript">
	var disqus_identifier = '<?= $post->id ?>';
	(function() {
		var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		dsq.src = 'http://codecabin.disqus.com/embed.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	})();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript=codecabin">comments powered by Disqus.</a></noscript>
