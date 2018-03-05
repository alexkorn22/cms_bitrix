'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    rimraf = require('rimraf'),
    browserSync = require("browser-sync"),
    nunjucks = require('gulp-nunjucks-html'),
    htmlmin = require('gulp-htmlmin'),
    data = require('gulp-data'),
    rimrafGulp = require('gulp-rimraf'),
    reload = browserSync.reload;

var path = {
    dist: {
        html: 'www/local/templates/wedo/html/dist/',
        js: 'www/local/templates/wedo/js/dist/',
        css: 'www/local/templates/wedo/css/dist/',
        //img: 'build/img/',
       // fonts: 'build/fonts/'
    },
    src: {
        html: 'www/local/templates/wedo/html/src/*.html',
        js: 'www/local/templates/wedo/js/src/*.js',
        style: 'www/local/templates/wedo/css/src/main.scss',
        // img: 'src/img/**/*.*',
        // fonts: 'src/fonts/**/*.*'
    },
    watch: {
        html: 'www/local/templates/wedo/html/src/**/*.html',
        js: 'www/local/templates/wedo/js/src/js/**/*.js',
        style: 'www/local/templates/wedo/css/src/**/*.scss',
        // img: 'src/img/**/*.*',
        // fonts: 'src/fonts/**/*.*'
    },
    clean: './www/local/templates/wedo/html/dist'
};

var config = {
    server: {
        baseDir: "./www/local/templates/wedo"
    },
   // tunnel: true,
    host: 'localhost',
    port: 3000,
    logPrefix: "CMS"
};

gulp.task('webserver', function () {
    browserSync(config);
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('pre-clean', function() {
    return gulp.src('./www/local/templates/wedo/**/dist', { read: false })
        .pipe(rimrafGulp());
});

gulp.task('html:dist', function () {
    gulp.src(path.src.html)
        .pipe(rigger())
        //.pipe(htmlmin({collapseWhitespace: true, minifyCSS: true, minifyJS: true}))
        .pipe(gulp.dest(path.dist.html))
        .pipe(reload({stream: true}));
});



gulp.task('js:dist', function () {
    gulp.src(path.src.js) 
        .pipe(rigger())
        .pipe(sourcemaps.init()) 
        .pipe(uglify())
        .pipe(sourcemaps.write()) 
        .pipe(gulp.dest(path.dist.js))
        .pipe(reload({stream: true}));
});

gulp.task('style:dist', function () {
    gulp.src(path.src.style) 
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ['src/'],
            outputStyle: 'compressed',
            sourceMap: true,
            errLogToConsole: true
        }).on('error',function (error) {
            console.log(error.toString())
        }))
        .pipe(prefixer({browsers: ['last 2 versions'], cascade: false}))
        .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.dist.css))
        .pipe(reload({stream: true}));
});

// gulp.task('image:dist', function () {
//     gulp.src(path.src.img)
//         .pipe(imagemin({
//             progressive: true,
//             svgoPlugins: [{removeViewBox: false}],
//             use: [pngquant()],
//             interlaced: true
//         }))
//         .pipe(gulp.dest(path.dist.img))
//         .pipe(reload({stream: true}));
// });

// gulp.task('fonts:dist', function() {
//     gulp.src(path.src.fonts)
//         .pipe(gulp.dest(path.dist.fonts))
// });

gulp.task('dist', [
    'html:dist',
    'js:dist',
    'style:dist'
    // 'fonts:build',
    // 'image:build'
]);


gulp.task('watch', function(){
    watch([path.watch.html], function(event, cb) {
        gulp.start('html:dist');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:dist');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:dist');
    });
    // watch([path.watch.img], function(event, cb) {
    //     gulp.start('image:dist');
    // });
    // watch([path.watch.fonts], function(event, cb) {
    //     gulp.start('fonts:dist');
    // });
});


gulp.task('default', ['dist', 'webserver', 'watch']);