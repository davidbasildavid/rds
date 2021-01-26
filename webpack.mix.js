const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
	'resources/js/codebase.core.min.js',
	'resources/js/codebase.app.min.js',
	'resources/js/noty.min.js',
	'resources/js/_custom.js',
], 'public/js/app.js')
	.sass('resources/sass/app.scss', 'public/css/app.css')
	.browserSync({
		proxy: '127.0.0.1:8000',
		notify: false,
		open: false
	});
