# Styleguide options

### Head

    link(rel="stylesheet" href="../wp-content/themes/petrofor/dist/css/index.css")
    link(rel="stylesheet" href="../wp-content/themes/petrofor/dist/css/styleguide.css")
    link(rel='stylesheet' href='https://cdn.rawgit.com/styledown/styledown/v1.0.2/data/styledown.css')
    script(src='https://cdn.rawgit.com/styledown/styledown/v1.0.2/data/styledown.js')

### Body

    h1(id="dfwp_TitleStyleGuide") Styleguide
    
    div(style="margin:20px;" id="dfwp_MenuComposant")
     p
      strong Composants
     a(href="?components=header") Header
     br
     a(href="?components=footer") Footer
    div(style="margin:20px;" id="dfwp_MenuElement")
     p
      strong Elements
     a(href="#buttons") Buttons
     br
     a(href="#colors") Colors
     br
     a(href="#fonts") Fonts
     br
     a(href="#icons") Icons
     br
     a(href="#inline-style") Inline
     br
     a(href="#title") Title
                    
    div#styleguides(sg-content)