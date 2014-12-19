<?php
	use Doublefou\Core\Config;

	//Initialisation et configuration du thème enfant
	add_action('after_setup_theme','dfwpChildSetup');
	function dfwpChildSetup()
	{
		//Inclure les fichier d'options core
		foreach (glob(Config::get('DF_WP_CHILD_PATH')."/functions/core/*.php") as $filename){
			include $filename;
		}

		//Inclure les fichier de gestion du thème
		foreach (glob(Config::get('DF_WP_CHILD_PATH')."/functions/theme/*.php") as $filename){
			include $filename;
		}	

		//Inclure les fichier de gestion de l'administration
		foreach (glob(__DIR__."/functions/admin/*.php") as $filename){
			include $filename;
		}
	}
?>