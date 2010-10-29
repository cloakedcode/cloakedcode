<h1 class='post-title'><?= $post->title ?></h1>
<div class='date'>Published on <?= $post->date() ?>.</div>

<div class='post-content'><?= $post->body() ?></div>

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
