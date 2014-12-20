<?php 

	/*******************************
	 * GESTION DE LA CONFIGURATION DE L'ADMINISTRATION
	 */
	
	use Doublefou\Helper\Admin;
	
	//Retirer les accents des fichiers uploadés
	Admin::removeAccentsToUploadFiles();

	//Supprimer	la ponctuation française des noms de fichiers
	Admin::removeFrenchPonctuationToUploadFiles();

	//Authoriser le svg en format d'upload
	Admin::addAllowedUploadFileType(
		array(
			'svg' => 'image/svg+xml'
		)
	);

	//Modifier les formats authorisés dans tinymce
	Admin::modifyTinyMceBlockFormat('Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5');

	//Passer TinyMce sur 2 lignes
	Admin::makeTinyMceTwoLines();

	//Supprimer le bouton pour obtenir le lien court
	Admin::deleteShortLinkBtn();	
	
	//Cacher certains menus de gauche pour l'éditeur
	Admin::hideMenu(
		'install_plugins',
		array(
			'tools.php',
			'edit-comments.php',
			'upload.php',
			'edit.php'
		)
	);

	//Cacher certaines élements du menu du haut pour l'éditeur
	Admin::hideMenuTop(
		'install_plugins',
		array(
			'wp-logo',
			'about',
			'new-content',
			'comments'
		)
	);

	//Supprimer des widget du dashboard pour l'éditeur
	Admin::removeDashboardWidgets(
		'install_plugins',
		array(
			'dashboard_plugins' => 'normal',
			'dashboard_recent_comments' => 'normal',
			'dashboard_right_now' => 'normal',
			'dashboard_quick_press' => 'side',
			'dashboard_primary' => 'side',
			'dashboard_secondary' => 'side',
		)
	);

	//On désactive l'éditeur pour certains templates de pages
	/*Admin::hideEditorForPagesTemplates(array('page-templates/histoire.php',
											'page-templates/activites.php',
											'page-templates/accueil.php',	
											'page-templates/cafe.php',						
											'page-templates/hotel.php',
											'page-templates/restaurant.php',
											'page-templates/contact.php',

	));*/

	//Afficher le bloc Yoast en bas
	add_filter( 'wpseo_metabox_prio', 'yoastBottom');
	function yoastBottom() {
		return 'low';
	}
?>