var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;
var bin = require('./tasks/bin');
var exec = require('child_process').exec;
var shell = require('gulp-shell');

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

// gulp.task('jigsaw', function () {
//     exec('./vendor/bin/jigsaw build');
// });

elixir(function(mix) {
    var env = argv.e || argv.env || 'local';
    var port = argv.p || argv.port || 3000;

    mix.sass('main.scss')
        .exec(bin.path() + ' build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
        .browserSync({
            port: port,
            server: { baseDir: 'build_' + env },
            proxy: null,
            files: [ 'build_' + env + '/**/*' ]
        });

    mix.less('clean-blog.less')
        .exec(bin.path() + ' build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
        .browserSync({
            port: port,
            server: { baseDir: 'build_' + env },
            proxy: null,
            files: [ 'build_' + env + '/**/*' ]
        });

    // mix.task('build_jigsaw');
});

// gulp.task('build_jigsaw', shell.task([
//     'vendor/bin/jigsaw build'
// ]));
