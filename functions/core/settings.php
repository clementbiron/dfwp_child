<?php
	
	/*******************************
	 * GESTION CORE
	 */

	use Doublefou\Core\Debug;
	use Doublefou\Core\Config;
	use Doublefou\Helper\Login;

	//Si on a configurer le mode debug dans l'option page
	if(get_option('debug_mode') == 'debug' || get_option('debug_mode') == false){

		//On passe en mode debug
		Config::setMode('debug');
	}

	//Si on a configurer le mode prod dans l'option page
	else if(get_option('debug_mode') == 'prod'){

		//On passe en mode prod
		Config::setMode('prod');
	}

	//En mode maintenance
	if(get_option('maintenance_mode') == 'true'){
		
		//Si on est pas sur l'admin, qu'on est pas un utilisateur connecté ou que l'on est pas sur la page de login
		if(!is_admin() && !is_user_logged_in() && (Login::isLoginPage() == false)){

			global $wp;

			//On redirige vers la page de maintenance
			require_once(get_stylesheet_directory().'/maintenance.php');
			die();
		}
	}
?>
