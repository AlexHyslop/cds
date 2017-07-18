# wordpress-template
The Boom Solutions boilerplate for wordpress

This is heavily influenced by HTML5 blank

* Go to the Wordpress' theme folder (`.../wp-content/themes/boomsol`)
* and then `npm install` and then `bower install` (you'll need gulp install as well, sometimes you might not need bower depending on your conifg)
* `gulp watch` will enable `livereload` and development version
* `gulp build` for distribute version with minified `js` and `css` files
* NOTE: `src` and `dist` folders can live happily together inside the same folder (`boomsol`) that in the `theme` folder. You'll have two different instances of the theme within `Appearance > Themes` panel inside the admin

You will more than likely wipe away ALL of the sass files to start your theme, but keeping the directory structure makes it a lot easier.