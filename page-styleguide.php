<?php
	/*
	Template Name: Styleguide template
	*/

	//Le chemin vers le fichier du styleguide généré
	$htmlPath = __DIR__.'/styleguide/styleguide.html';

	//Si on veut afficher un composant, on change le chemin du fichier
	$queryComponents = (isset($_GET['components']) && !empty($_GET['components'])) ? $_GET['components'] : false ;
	if($queryComponents){
		$htmlPath = __DIR__.'/styleguide/components/'.$queryComponents.'.html';
	}

	//On désactive les erreurs DomDocument pour le chargement HTML 5
	$internalErrors = libxml_use_internal_errors(true);

	//On récuère le contenu généré du styleguide et on le charge
	$html = file_get_contents($htmlPath);
	$doc = new DOMDocument();
	$doc->loadHTML($html);

	//On réactive les erreurs
	libxml_use_internal_errors($internalErrors);

	//On cible <body>
	$body = $doc->getElementsByTagName('body')->item(0);

	//Pour l'affichage d'un composant
	if($queryComponents)
	{
		//On vire les menus et le titre
		$dfwpMenuComposantt = $doc->getElementById('dfwp_MenuComposant');
		$dfwpMenuElement = $doc->getElementById('dfwp_MenuElement');
		$dfwpTitleStyleGuide = $doc->getElementById('dfwp_TitleStyleGuide');
		$body->setAttribute('class', 'dfwp_StyleGuide-isComposant');
	}

	//On charge le svg et on l'insère tout de suite après <body>
	$svgPath = __DIR__.'/src/sprite/sprite.svg';
	if(file_exists($svgPath))
	{
		$svg = file_get_contents($svgPath);
		$frag = $doc->createDocumentFragment();
		$frag->appendXML($svg);
		$body->insertBefore($frag, $body->firstChild);
	}

	//Output
	echo $doc->saveHTML();
?>