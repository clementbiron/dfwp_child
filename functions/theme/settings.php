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
	
	/**************
	 * CUSTOM MAIN QUERY 
	 */
	add_action('pre_get_posts', 'customMainQuery',5 );
	function customMainQuery($pQuery)
	{
		//Sur la page d'accueil
		if(is_home() && $pQuery->is_main_query() ){
			
			//On récupere uniquement les établissements
			//$pQuery->set( 'post_type', array( 'etablissement') );
		}
		
		return $pQuery;
	}
?>