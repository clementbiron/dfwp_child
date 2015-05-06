<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie6"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10 ie9"> <![endif]-->
<?php if (stripos($_SERVER['HTTP_USER_AGENT'], 'MSIE 10')): ?>
	<html class="no-js ie10">
<?php else: ?>
	<html class="no-js">
<?php endif; ?>

<head>
	<title>Maintenance en cours</title>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/static/img/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/static/img/favicon.gif" type="image/gif" />
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/static/img/favicon.png" type="image/png" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/deploy/css/maintenance.css" />
	<meta name="Author" content="Clément Biron" />
	<meta name="Robots" content="all" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Maintenance en cours.</h1>
	<div class="dfwp_warningIE" id="dfwp_warningIE">
			<div class="dfwp_warningIE_bg"></div>
		<div class="dfwp_warningIE_msg">				
			<h2>Votre navigateur est obsolète</h2>
			<p>Vous risquez de ne pas pouvoir profiter pleinement de la navigation sur ce site.
			Procédez à une mise à jour de votre <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx"><u>nagivateur</u></a> ou <a href="https://www.mozilla.org/fr/firefox/new/"><u>changez en</u></a>.</p>
			<p onclick="document.getElementById('dfwp_warningIE').style.display = 'none';"><strong>Cliquez ici pour continuer sur le site</strong></p>
		</div>
	</div>
</body>
</html>