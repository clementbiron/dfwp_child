<?php
	
	//Exit si accès direct
	if (!defined('ABSPATH')) exit; 

	/*******************************
	 * GESTION DE LA CONFIGURATION DU THEME
	 */
	
	use Doublefou\Helper\Theme;
	use Doublefou\Helper\Seo;
	use Doublefou\Helper\Yoast;
	use Doublefou\Core\Debug;
	use Doublefou\Helper\Login;

	//On cache l'admin bar sur le front
	Theme::hideAdminBar();

	//On clean le head
	Theme::cleanHeader();

	//Désactiver les EMOJI
	Theme::disableEmoji();

	//Gestion titre et description
	Seo::initHeader();

	//Supprimer le footer yoast
	Yoast::removeFooter();
	
	//Custom menus
	/*	register_nav_menus( array(
		'menu-header' => 'Navigation principale',
		'menu-footer' => 'Navigation en pied de page'
	) );
	*/

	//Chargement des fichiers javascript
	function dfwpchild_enqueue_scripts() {

		//Le nom du fichier js du projet
		//dépends du 'mode' choisi en admin
		$projectJsName = (get_option('debug_mode') == 'prod') ? 'index.min.js' :  'index.js';
		
		//Enregistrer le script dans la pile
		wp_register_script(
			'dfwpchild_index',
			get_stylesheet_directory_uri().'/dist/js/'.$projectJsName,
			array(
				'jquery',
			),
			1,
			true
		);

		//Charger le fichier js du projet
		wp_enqueue_script('dfwpchild_index');
	}
	add_action('wp_enqueue_scripts', 'dfwpchild_enqueue_scripts');

	//Chargement styles en front
	function dfwpchild_enqueue_style(){

		//Le nom du fichier css du projet
		//dépends du 'mode' choisi en admin
		$projectCssName = (get_option('debug_mode') == 'prod') ? 'index.min.css' :  'index.css';

		//Enregistrer la css dans la pile
		wp_register_style( 
			'dfwpchild_index',
			get_stylesheet_directory_uri().'/dist/css/'.$projectCssName
		);

		//Enregistrer la css de la pattern
		wp_register_style( 
			'dfwpchild_pattern',
			get_stylesheet_directory_uri().'/dist/css/pattern.min.css'
		);

		//Enregistrer la css de la maintenance
		wp_register_style( 
			'dfwpchild_maintenance',
			get_stylesheet_directory_uri().'/dist/css/maintenance.min.css'
		);

		//Charger le css du projet
		wp_enqueue_style('dfwpchild_index');
		
		//Pour la page pattern uniquement
		if(is_page_Template('page-pattern.php')){

			//On charge la css qui va bien
			wp_enqueue_style('dfwpchild_pattern');
		}

		//Si la maintenance est activée
		if(get_option('maintenance_mode') == 'true'){

			//Si on est pas sur l'admin, qu'on est pas un utilisateur connecté ou que l'on est pas sur la page de login
			if(!is_admin() && !is_user_logged_in() && (Login::isLoginPage() == false)){

				//On charge la feuille de style de la maintenance
				wp_enqueue_style('dfwpchild_maintenance');
			}
		}
	}
	add_action('wp_enqueue_scripts', 'dfwpchild_enqueue_style');	
?>