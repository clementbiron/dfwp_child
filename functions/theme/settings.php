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

	//On cache l'admin bar sur le front
	Theme::hideAdminBar();

	//On clean le head
	Theme::cleanHeader();

	//Gestion titre et description
	Seo::initHeader();

	//Supprimer le footer yoast
	Yoast::removeFooter();

	/**************
	 * REWRITE RULES
	 */
	
	/**************
	 * CUSTOM MENUS
	 */
	/*	register_nav_menus( array(
		'menu-header' => 'Navigation principale',
		'menu-footer' => 'Navigation en pied de page'
	) );
	*/
	
	//Chargement des fichiers javascript
	function dfwpchild_enqueue_scripts() {

		wp_register_script(
			'dfwpchild',
			get_stylesheet_directory_uri().'/deploy/js/script.js',
			array(
				'jquery',
			),
			1,
			true
		);

		//Charger le fichier js du projet
		wp_enqueue_script('dfwpchild');
	}
	add_action('wp_enqueue_scripts', 'dfwpchild_enqueue_scripts');

	//Chargement styles en front
	function dfwpchild_enqueue_style(){

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
?>