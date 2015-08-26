#### DFWP CHILD
Theme enfant de [DFWP](https://github.com/posykrat/dfwp)

----------

#### TODO
- Mettre en place un optimiseur d'image
- Mettre en place un outil de création de sprite (png + svg)

----------

#### CHANGELOG
A voir ici : [Changelog](https://github.com/posykrat/dfwp_child/blob/develop/changelog.md)

----------

#### SETUP

1. Configurer Knacss : src/lib/knacss/_00-config.less
2. Configurer le projet : src/bootstrap/config.less

----------

#### BUILD
1. Se positionner dans build : cd /build
2. npm install --save-dev
3. Commandes gulp disponibles :

	Pour le dev
	gulp pattern : tâche pour la css du layout pattern
	gulp maintenance : tâche pour la css du layout maintenance
	gulp scripts : pour le js du projet
	gulp styles : pour la css du projet
	gulp : tâche par défaut = watch de gulp scripts + gulp styles
	
	Pourn la prod
	gulp prod : création des fichiers pour la prod

----------

#### MAINTENANCE
Le fichier page-maintenance.php est utilisé pour les utilisateurs non loggé si l'option de
maintenance est activée dans DFWP Options en administration.

Le fichier maintenance.css est chargé uniquement pour cette page.

----------

#### PATTERN
La pattern library est accessible via exemple.com/pattern
Le fichier pattern.css est chargé uniquement pour cette page.

