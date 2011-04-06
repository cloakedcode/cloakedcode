<?php

ini_set('date.timezone', 'America/Denver');

if (isset($_POST['send']))
{
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
	 * Send the email
	 *
	 */
	include('app/strip_html.php');

	$email = Html2txt($_POST['email']);
	$subject = html2txt($_POST['subject']);
	$msg = html2txt($_POST['message']);

	mail('alan@cloakedcode.com', $subject, $msg, "From: {$email}");

	Acorn::renderView('views/sent');
}
else
{
	header('Location: /');
}

?>