#### DFWP CHILD
Theme enfant de [DFWP](https://github.com/posykrat/dfwp)

----------

#### TODO
- Ajouter la compression pour les images statiques
- Ajouter la gestion des sprite svg
- Ajouter une gestion d'environnement
- Mettre à jour les mixins SASS

----------

#### CHANGELOG
A voir ici : [Changelog](https://github.com/posykrat/dfwp_child/blob/master/changelog.md)

----------

#### BUILD & SETUP

1. `cd build && npm install && bower install`
2. Configurer le projet : src/bootstrap/config.scss (vous pouvez surcharger la config de Knacss, liste des vars ici : src/libs/knacss/sass/_config-variables.sass)
3. Configurer le styleguide styleguide/config.md
4. Vérifier et corriger si besoin le gulpfile.js

Commandes gulp disponibles :
`gulp styles`
`gulp scripts` 
`gulp sprites` 
`gulp styleguide` 
`gulp` (tâches par défaut + watch de gulp sprites, scripts et styles)

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
Le fichier page-maintenance.php est utilisé pour les utilisateurs non loggé si l'option de maintenance est activée dans DFWP options en administration.
Le fichier maintenance.css est chargé uniquement pour cette page.

----------

#### STYLEGUIDE
Créer une page nommée styleguide et l'associé au template styleguide, accessible via www.exemple.com/styleguide.
Le fichier styleguide.css est chargé uniquement pour cette page.

