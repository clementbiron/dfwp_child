#### DFWP CHILD
Theme enfant de [DFWP](https://github.com/posykrat/dfwp)

----------

#### TODO
- Ajouter la compression pour les images statiques
- Ajouter la gestion des sprite svg
- Ajouter une gestion d'environnement
- Mettre à jour les mixins en version SASS
- Renommer la pattern en 'style guide'

----------

#### CHANGELOG
A voir ici : [Changelog](https://github.com/posykrat/dfwp_child/blob/master/changelog.md)

----------

#### BUILD & SETUP

1. Installer Node & Bower
2. Dans le dossier build : 
    `npm install`
    `bower install`
5. Configurer Knacss : src/libs/knacss/sass/_config-variables.sass
6. Configurer le projet : src/bootstrap/config.less

Commandes gulp disponibles :
	gulp styles 
	gulp scripts 
	gulp sprites 
	gulp : tâche par défaut + watch de gulp sprites, scripts et styles

----------

#### SPRITES
Les sprites 1x et 2x sont générés automatiquement.

1. Sprite 1x :
	Png sources : src\sprite\1x
	Sass : src\sprite\1x\sprite1x.scss
	Sprite : dist\img\1x\sprite1x.png

1. Sprite 2x :
	Png sources : src\sprite\2x
	Sass : src\sprite\2x\sprite2x.less
	Sprite : dist\img\2x\sprite2x.png

----------

#### MAINTENANCE
Le fichier page-maintenance.php est utilisé pour les utilisateurs non loggé si l'option de
maintenance est activée dans DFWP Options en administration.

Le fichier maintenance.css est chargé uniquement pour cette page.

----------

#### PATTERN
La pattern library est accessible via www.exemple.com/pattern
Le fichier pattern.css est chargé uniquement pour cette page.

