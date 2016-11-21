<?php
	
	//Exit si accès direct
	if (!defined('ABSPATH')) exit; 

	/*******************************
	 * GESTION CORE
	 */

	use Doublefou\Core\Debug;
	use Doublefou\Core\Config;
	use Doublefou\Helper\Login;

	//Si on a configuré le mode debug
	if(get_option('debug_mode') == 'debug' || get_option('debug_mode') == false){

		//On passe en mode debug
		Config::setMode('debug');
	}

	//Si on a configuré le mode prod
	else if(get_option('debug_mode') == 'prod'){

		//On passe en mode prod
		Config::setMode('prod');
	}

	//Template include filter
	add_filter( 'template_include', 'dfwp_pageTemplate', 99 );
	function dfwp_pageTemplate( $template ) {
		
		//Si on a activé la maintenance
		if(get_option('maintenance_mode') == 'true'){

			//Si on est pas sur l'admin, qu'on est pas un utilisateur connecté ou que l'on est pas sur la page de login
			if(!is_admin() && !is_user_logged_in() && (Login::isLoginPage() == false)){

				//On charge le template correspondant
				$maintenanceTemplate = locate_template( array( 'page-maintenance.php' ) );
				if ($maintenanceTemplate != ''){
					return $maintenanceTemplate;
				}	
			}
		}

		return $template;
	}
	
?>