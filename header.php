<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie6"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10 lt-ie9 ie9"> <![endif]-->
<?php if (stripos($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')): ?>
	<html class="no-js lt-ie10 ie10">
<?php else: ?>
	<html class="no-js">
<?php endif; ?>

<head>
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/static/favicon/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/static/favicon/favicon.gif"  type="image/gif" />
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/static/favicon/favicon.png"   type="image/png" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/deploy/css/style.css" />			
	<meta name="Author" content="Clément Biron" />
	<meta name="Robots" content="all" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<?php 
		// For plugins 
		wp_head();
	 ?>
</head>
<body class="<?php echo join(' ', get_body_class()); ?>">

	<?php 
		//IE 6, 7, 8, 9 message
		if((strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.') !== FALSE) ||  
			(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.') !== FALSE) || 
			(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.') !== FALSE) || 
			(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.') !== FALSE)){
			echo '<div class="dfwp_warningIE">';
				echo '<h2>Votre navigateur est obsolète</h2>';
				echo '<p>Vous risquez de ne pas pouvoir profiter pleinement de la navigation sur ce site.</p>';
				echo '<p>Procédez à une mise à jour de votre <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx"><u>nagivateur</u></a> ou <a href="https://www.mozilla.org/fr/firefox/new/"><u>changez en</u></a>.</p>';
			echo '</div>';
		}
	?>