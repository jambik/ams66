var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    /* App files */
    mix.styles([
        '../../../node_modules/bootstrap/dist/css/bootstrap.min.css',
        '../../../node_modules/sweetalert/dist/sweetalert.css',
        '../../../node_modules/font-awesome/css/font-awesome.min.css',
        '../../../node_modules/animate.css/animate.min.css'
    ], 'public/css/app.bundle.css');
    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.min.js',
        '../../../node_modules/bootstrap/dist/js/bootstrap.min.js',
        '../../../node_modules/sweetalert/dist/sweetalert.min.js',
        '../../../node_modules/jquery.scrollto/jquery.scrollTo.min.js',
        '../../../node_modules/noty/js/noty/packaged/jquery.noty.packaged.min.js'
    ], 'public/js/app.bundle.js');
    mix.copy([
        'node_modules/bootstrap/fonts',
        'node_modules/font-awesome/fonts/*.*',
    ], 'public/fonts');


    /* Admin files */
    mix.styles([
        '../../../node_modules/materialize-css/dist/css/materialize.min.css',
        '../../../node_modules/animate.css/animate.min.css',
        '../../../node_modules/sweetalert/dist/sweetalert.css',
        '../../../node_modules/jquery-datetimepicker/jquery.datetimepicker.css',
        '../../../bower_components/dropzone/dist/min/dropzone.min.css'
    ], 'public/css/admin.bundle.css');
    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.min.js',
        '../../../node_modules/vue/dist/vue.min.js',
        '../../../node_modules/materialize-css/dist/js/materialize.min.js',
        '../../../node_modules/noty/js/noty/packaged/jquery.noty.packaged.min.js',
        '../../../node_modules/jquery.scrollto/jquery.scrollTo.min.js',
        '../../../node_modules/sweetalert/dist/sweetalert.min.js',
        '../../../node_modules/tablesorter/dist/js/jquery.tablesorter.combined.min.js',
        '../../../node_modules/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js',
        '../../../node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js',
        '../../../bower_components/dropzone/dist/min/dropzone.min.js',
        '../../../bower_components/jquery-ui/ui/minified/core.min.js',
        '../../../bower_components/jquery-ui/ui/minified/widget.min.js',
        '../../../bower_components/jquery-ui/ui/minified/mouse.min.js',
        '../../../bower_components/jquery-ui/ui/minified/sortable.min.js'
    ], 'public/js/admin.bundle.js');

    /* Jstree Files */
    mix.copy('node_modules/jstree/dist', 'public/library/jstree');

    /* Materialize-css Files */
    mix.copy('node_modules/materialize-css/dist/fonts', 'public/fonts');
});