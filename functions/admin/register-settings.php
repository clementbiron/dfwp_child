<?php 
	
	//Exit si accès direct
	if (!defined('ABSPATH')) exit; 

	/*******************************
	 * GESTION DE LA PAGE D'OPTIONS DFWP
	 */
	
	//A l'initialisation de l'administration
	add_action('admin_init', 'dfwp_registerSettings');
	
	//On enregistre les settings du theme
	function dfwp_registerSettings()
	{
		//On enregistre le debug mode
		register_setting('dfwp_settings', 'debug_mode', 'dfwp_validDebugMode');

		//Maintenance mode
		register_setting('dfwp_settings', 'maintenance_mode', 'dfwp_validMaintenanceMode');
		
		//Validation du debug mode
		function dfwp_validDebugMode($input){
			if(empty($input)){
				return 'prod';
			}
			if(!empty($input)){
				if($input != "prod" && $input != "debug"){
					return 'prod';
				}else{
					return $input;
				}
			}
		}

		//Validation du mode de maintenance
		function dfwp_validMaintenanceMode($input){
			if(empty($input)){
				return 'false';
			}
			else if(!empty($input)){
				if($input != "true"){
					return 'false';
				}else{
					return $input;
				}	
			}
		}
	}
	
	//Lors de la construction du menu d'administration
	add_action( 'admin_menu', 'dfwp_adminMenu' );
	
	//On ajoute une page pour la gestion des settings du theme
	function dfwp_adminMenu()
	{
		add_menu_page(
	      'All Options', // le titre de la page
	      'All Options',            // le nom de la page dans le menu d'admin
	      'administrator',        // le rôle d'utilisateur requis pour voir cette page
	      'options.php'        // un identifiant unique de la page
		); 

		add_menu_page(
	      'DFWP options', // le titre de la page
	      'DFWP options',            // le nom de la page dans le menu d'admin
	      'administrator',        // le rôle d'utilisateur requis pour voir cette page
	      'dfwp-options',        // un identifiant unique de la page
	      'dfwp_settingsPage'   // le nom d'une fonction qui affichera la page
	   );
	}
	
	//La gestion de cette page de settings
	function dfwp_settingsPage()
	{
		?>
	   <div class="wrap">
	      <h2>DFWP Options</h2>
	 
	      <form method="post" action="options.php">
	         <?php
	            // cette fonction ajoute plusieurs champs cachés au formulaire
	            // pour vous faciliter le travail.
	            // elle prend en paramètre le nom du groupe d'options
	            // que nous avons défini plus haut.
	            settings_fields( 'dfwp_settings' );
	         ?>
	 
	         <table class="form-table">
	            <tr valign="top">
			      <th scope="row"><label for="debug_mode">Debug mode</label></th>
			      <td>
			      	<input type="text" id="debug_mode" name="debug_mode"  value="<?php echo get_option( 'debug_mode' ); ?>" />
			      	<span class="description">debug | prod</span>
			      </td>
			   </tr>
			   <tr valign="top">
			      <th scope="row"><label for="maitenance_mode">Maintenance mode</label></th>
			      <td>
			      	<input type="text" id="maintenance_mode" name="maintenance_mode"  value="<?php echo get_option( 'maintenance_mode' ); ?>" />
			      	<span class="description">false | true</span>
			      </td>
			   </tr>
	         </table>
	 
	         <p class="submit">
	            <input type="submit" class="button-primary" value="Mettre à jour" />
	         </p>
	      </form>
	   </div>
	<?php
	}
?>