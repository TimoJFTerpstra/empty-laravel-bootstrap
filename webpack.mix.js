const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

// sass
let files = [
    'default.scss'
];
let scss_deploy = './public/css/themes';
let scss_files = './resources/sass/themes/';

for (let index = 0; index < files.length; index++) {
    const element = files[index];
    mix.sass( scss_files + element, scss_deploy);
}

if (mix.inProduction()) {
    mix.version();
}
