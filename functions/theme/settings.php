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

	//Chargement des langues
	//load_theme_textdomain('dfwpchild',get_stylesheet_directory().'/languages');
	
	//Custom menus
	/*	register_nav_menus( array(
		'menu-header' => 'Navigation principale',
		'menu-footer' => 'Navigation en pied de page'
	) );
	*/
<<<<<<< HEAD
	
	//Chargement des fichiers javascript
	function dfwpchild_enqueue_scripts() {

		wp_register_script(
			'dfwpchild',
			get_stylesheet_directory_uri().'/deploy/js/script.js',
=======

	//Chargement des fichiers javascript
	function dfwpchild_enqueue_scripts() {

		//Le nom du fichier js du projet
		//dépends du 'mode' choisi en admin
		$projectJsName = (get_option('debug_mode') == 'prod') ? 'index.min.js' :  'index.js';
		
		//Enregistrer le script dans la pile
		wp_register_script(
			'dfwpchild_index',
			get_stylesheet_directory_uri().'/dist/js/'.$projectJsName,
>>>>>>> origin/develop
			array(
				'jquery',
			),
			1,
			true
		);

		//Charger le fichier js du projet
<<<<<<< HEAD
		wp_enqueue_script('dfwpchild');
=======
		wp_enqueue_script('dfwpchild_index');
>>>>>>> origin/develop
	}
	add_action('wp_enqueue_scripts', 'dfwpchild_enqueue_scripts');

	//Chargement styles en front
	function dfwpchild_enqueue_style(){

<<<<<<< HEAD
		//Enregistrer les css dans la pile
		wp_register_style( 
			'dfwpchild',
			get_stylesheet_directory_uri().'/deploy/css/style.css'
		);

		//Charger les css 
		wp_enqueue_style('dfwpchild');
	}
	add_action('wp_enqueue_scripts', 'dfwpchild_enqueue_style');

	/**
	 * Désactiver les EMOJI
	 */
	function disable_wp_emojicons()
	{
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

		// filter to remove TinyMCE emojis
		add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
	}

	function disable_emojicons_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}
	
	add_action( 'init', 'disable_wp_emojicons' );
=======
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
>>>>>>> origin/develop
?>