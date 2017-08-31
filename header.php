<?php
	//On récupère les languages attributes
	use Doublefou\Helper\Theme;
	$languagesAttributes = Theme::getLanguageAttributes();
?>
<!DOCTYPE html>
<html <?php echo $languagesAttributes; ?>>
<head>
	<link href="https://fonts.googleapis.com/css?family=Amiko:700|Hind+Guntur:400,700" rel="stylesheet">
	<meta name="Author" content="Clément Biron" />
	<meta name="Robots" content="all" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/static/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/static/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/static/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/static/favicon/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/static/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#2b437c">
	
	<?php 
		// For plugins 
		wp_head();
	?>
</head>
<body class="<?php echo join(' ', get_body_class()); ?>">

<?php
	//Chargement du svg
	//include(__DIR__.'/src/sprite/sprite.svg');
	
	//Chargement du header
	//get_template_part('src/components/header/header');
?>