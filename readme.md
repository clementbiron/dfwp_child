#### SETUP

 1. Configurer Knacss : lib/dependencies/knacss/_00-config.less
 2. Faire la config Less : lib/dependencies/dfwp/config.less
 3. Activer le thème enfant et configurer les options de DFWP en administration
 5. Configuration du fichier wp-config.php
	 6. générer des clés d'authentification SALT ici : https://api.wordpress.org/secret-key/1.1/salt/ qui vont chiffrer les cookies, coller dans le fichier
	 7. Snippet à ajouter dans le fichier : https://gist.github.com/posykrat/0e932cff886d17d79686
 8. Sippet à ajouter dans le fichier .htaccess : https://gist.github.com/posykrat/24435b380017c8983e67

 
----------
#### NPM INSTALL
npm install --save-dev

#### BUILD
Se mettre dans le dossier build

	cd /build
	
Commandes Grunt disponibles :

	 grunt (local and watch)
	 grunt dev (local)
	 grunt dist (prod) 

----------

#### Gestion de la Pattern
Créer une page et l'associer au template 'Pattern template'

- fichier php : page-pattern.php
- fichier less : lib/dfwp_pattern/pattern.less