#### DFWP CHILD
Theme enfant de [DFWP](https://github.com/posykrat/dfwp)

----------

#### TODO
- Ajouter la compression d'image pour le build en dev (images static et générées)
- Mettre en place un outil de sprite svg
- Supprimer la gestion du message d'erreur IE 8 
- Installer Dpoy par défaut

----------

#### CHANGELOG
A voir ici : [Changelog](https://github.com/posykrat/dfwp_child/blob/master/changelog.md)

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
	gulp sprite : gestion du sprite 1x
	gulp sprite2x : gestion du sprite retina 2x
	gulp scripts : pour le js du projet
	gulp styles : pour la css du projet
	gulp : tâche par défaut + watch de gulp sprite, sprite2x, scripts + styles
	
	Pourn la prod
	gulp prod : création des fichiers pour la prod

----------

#### SPRITES
Les sprites 1x et 2x sont générées automatiquement.

1. Sprite 1x :
	Png sources : src\sprite\1x
	Less : src\sprite\1x\sprite.less
	Sprite : dist\img\1x\sprite.png

1. Sprite 2x :
	Png sources : src\sprite\2x
	Less : src\sprite\2x\sprite2x.less
	Sprite : dist\img\2x\sprite.png

----------

#### MAINTENANCE
Le fichier page-maintenance.php est utilisé pour les utilisateurs non loggé si l'option de
maintenance est activée dans DFWP Options en administration.

Le fichier maintenance.css est chargé uniquement pour cette page.

----------

#### PATTERN
La pattern library est accessible via exemple.com/pattern
Le fichier pattern.css est chargé uniquement pour cette page.

