<?php  require('core/init.php'); ?>
<?php
	$template = new Template('templates/register.php');
	
	//asignar vars
	$template->heading = 'Create an account.';
	
	//mostrar Template
	echo $template;
