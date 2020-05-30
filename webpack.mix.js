const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
    	'resources/template/css/fullcalendar.bundle.css',
    	'resources/template/css/plugins.bundle.css',
    	'resources/template/css/wizard-1.css',
        'resources/template/css/style.bundle.css',
    	'public/css/app.css'
    ],'public/css/estilos.css')
    .scripts([
    	'public/js/app.js',
    	'resources/template/js/plugins.bundle.js',
    	'resources/template/js/scripts.bundle.js',
    	'resources/template/js/fullcalendar.bundle.js',
    	'resources/template/js/gmaps.js',
    	'resources/template/js/dashboard.js',
        'resources/template/js/add-project.js',
        'resources/template/js/options.js',
        'resources/template/js/bootstrap-datepicker.js',
        // 'resources/template/js/select2.js',
    ],'public/js/custom.js')
    .browserSync({
    	proxy : 'appbwc.pe'
    });
