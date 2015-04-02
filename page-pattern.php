<?php
/*
Template Name: Pattern template
*/
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo get_bloginfo('name'); ?> Pattern</title>
	
	<!-- Fonts -->
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/deploy/css/style.css" />	
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/deploy/css/pattern.css" />	
</head>
	<body> 
		
		<!-- Elements -->
		<div class="dfwp_pattern_container">
			<h1 class="dfwp_pattern_h1">Pattern Elements</h1>
			
			<!-- Couleurs -->
			<section class="dfwp_pattern_section">
				<h2 class="dfwp_pattern_h2">Couleurs</h2>	
				<div class="dfwp_pattern_subsection">
					<div class="dfwp_valuecode_container">
						<div class="dfwp_pattern_value">
							#exemple
						</div>
						<div class="dfwp_pattern_code">
						   <pre>.exemple</pre>
						</div>
					</div>
				</div>
			</section>

			<!-- Typographie -->
			<section class="dfwp_pattern_section">
				<h2 class="dfwp_pattern_h2">Typographie</h2>	
				<div class="dfwp_pattern_subsection">
					<div class="dfwp_valuecode_container">
						<div class="dfwp_pattern_value">
							Ma super police
						</div>
						<div class="dfwp_pattern_code">
						   <pre>.ma_super_class</pre>
						</div>
					</div>
				</div>
			</section>

			<!-- Styles de textes -->
			<section class="dfwp_pattern_section">
				<h2 class="dfwp_pattern_h2">Styles de textes</h2>	
				<div class="dfwp_pattern_subsection">
					<div class="dfwp_valuecode_container">
						<div class="dfwp_pattern_value">
							<p>Lorem ipsum...</p>
						</div>
						<div class="dfwp_pattern_code">
						   <pre>&lt;p&gt;Lorem ipsum...&lt;/p&gt;</pre>
						</div>
					</div>
				</div>
			</section>

			<!-- Titres -->
			<section class="dfwp_pattern_section">
				<h2 class="dfwp_pattern_h2">Titres</h2>	
				<div class="dfwp_pattern_subsection">
					<div class="dfwp_valuecode_container">
						<div class="dfwp_pattern_value">
							<h1>Mon super titre</h1>
						</div>
						<div class="dfwp_pattern_code">
							<pre>&lt;h1&gt;Mon super titre&lt;/h1&gt;</pre>
							<pre>&lt;div class=&quot;ma_super_class&quot;&gt;Mon super titre&lt;/div&gt;</pre>
						</div>
					</div>
				</div>
			</section>

			<!-- Boutons -->
			<section class="dfwp_pattern_section">
				<h2 class="dfwp_pattern_h2">Boutons</h2>	
				<div class="dfwp_pattern_subsection">
					<div class="dfwp_valuecode_container">
						<div class="dfwp_pattern_value">
							Mon bouton
						</div>
						<div class="dfwp_pattern_code">
							<pre>Mon code de bouton</pre>
						</div>
					</div>
				</div>
			</section>

			<!-- Elements de formulaire -->
			<section class="dfwp_pattern_section">
				<h2 class="dfwp_pattern_h2">Elements de formulaire</h2>	
				<div class="dfwp_pattern_subsection">
					<div class="dfwp_valuecode_container">
						<div class="dfwp_pattern_value">
							Mon élément
						</div>
						<div class="dfwp_pattern_code">
							<pre>Mon code d'élément</pre>
						</div>
					</div>
				</div>
			</section>

			<!-- Icônes & pictos -->
			<section class="dfwp_pattern_section">
				<h2 class="dfwp_pattern_h2">Icônes & pictos</h2>	
				<div class="dfwp_pattern_subsection">
					<div class="dfwp_valuecode_container">
						<div class="dfwp_pattern_value">
							Mon picto
						</div>
						<div class="dfwp_pattern_code">
							<pre>Mon code de picto</pre>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- Composants -->
		<div class="dfwp_pattern_container">
			<h1 class="dfwp_pattern_h1">Pattern Composants</h1>
			
			<!-- Mon composant 1 -->
			<section class="dfwp_pattern_section">
				<h2 class="dfwp_pattern_h2">Mon composant 1</h2>	
				<div class="dfwp_pattern_subsection">
					<div class="dfwp_valuecode_container">
						<div class="dfwp_pattern_value">
							Mon composant 1
						</div>
						<div class="dfwp_pattern_code">
							<pre>Mon code de composant 1</pre>
						</div>
					</div>
				</div>
			</section>
		</div>

		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/deploy/js/script.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/deploy/js/pattern.js"></script>
		<script type="text/javascript">
			DFWP_Bootstrap.init();
		</script>
	</body>
</html>