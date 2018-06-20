var gulp 							= require('gulp'),
    sass 							= require('gulp-sass'),
	browserSync 		           	= require('browser-sync'),
	concatJS      	            	= require('gulp-concat'), // Подключаем gulp-concat (для конкатенации js файлов)
    concatCss 		        		= require('gulp-concat-css'),
    uglify     		            	= require('gulp-uglifyjs'), // Подключаем gulp-uglifyjs (для сжатия JS)
    cssnano     	           		= require('gulp-cssnano'), // Подключаем пакет для минификации CSS
    rename      		          	= require('gulp-rename'), // Подключаем библиотеку для переименования файлов
    del                             = require('del'), // Подключаем библиотеку для удаления файлов и папок
    imagemin                        = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
    pngquant                        = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
    cache       	           		= require('gulp-cache'), // Подключаем библиотеку кеширования
    autoprefixer                    = require('gulp-autoprefixer'),// Подключаем библиотеку для автоматического добавления префиксов
    notify                          = require('gulp-notify'),
    php                             = require('gulp-connect-php'),
    watch                           = require('gulp-watch');
 

gulp.task('watch', ['connect-sync'], function() {
    gulp.watch(['app/sass/**/*.+(scss|sass)','app/subdir/**/app/sass/**/*.+(scss|sass)'], ['sass',browserSync.reload]); // Наблюдение за sass файлами
    gulp.watch('app/**/*.+(html|php)', browserSync.reload).on('change', function (file) {
    	console.log('Done');
	});
    gulp.watch('app/js/**/*.js', ['move_js',browserSync.reload]); // Наблюдение за JS файлами в папке js
    gulp.watch('app/**/libs.min.*',['build-libs',browserSync.reload]);
    gulp.watch(['app/img/**/*','app/subdir/**/app/img/**/*'],['img',browserSync.reload]);
});

gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({ // Выполняем browser Sync
        proxy:'kalaris.dev',
        notify: false // Отключаем уведомления
    });
});

gulp.task('sass' ,function(){
	gulp.src('app/sass/**/*.+(scss|sass)')
		.pipe(sass({outputstyle:'compressed'}).on('error',sass.logError))
		.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
        .pipe(gulp.dest('dist/css'));
    gulp.src('app/subdir/**/app/sass/**/*.+(scss|sass)')
        .pipe(sass({outputstyle:'compressed'}).on('error',sass.logError))
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace('app\\sass','css');
        }))
        .pipe(gulp.dest('dist'));
});

gulp.task('css-libs', function() {
    return gulp.src(['app/libs/**/dist/**/*.css','app/libs/**/dist/**/!*min*']) // Выбираем файл для минификации
        //.pipe(cssnano()) // Сжимаем
        .pipe(concatCss('libs.min.css'))
        .pipe(gulp.dest('dist/css')); // Выгружаем в папку app/css
});

gulp.task('js-libs', function() {
    return gulp.src( // Берем все необходимые библиотеки
        ['app/libs/jquery/dist/jquery.min.js', 
        'app/libs/jquery-ui/jquery-ui.min.js',
        'app/libs/bootstrap/dist/js/bootstrap.min.js',
        'app/libs/slick-carousel/dist/slick.min.js'])
        .pipe(concatJS('libs.min.js')) // Собираем их в кучу в новом файле libs.min.js 
        .pipe(uglify().on( 'error', notify.onError(
        {
          message: "<%= error.message %>",
          title  : "JS Error!"
        } ) )
      ) // Сжимаем JS файл
        .pipe(gulp.dest('dist/js')); // Выгружаем в папку app/js
});

gulp.task('build-libs', function() {
    gulp.start('css-libs');
    gulp.start('js-libs');
});

gulp.task('move_html',function(){
    del.sync(['dist/**/*.+(html|php)']);
    gulp.src('app/*.+(html|php)')
        .pipe(gulp.dest('dist'));
    gulp.src('app/subdir/**/app/*.+(html|php)')
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('app','');
    }))
    .pipe(gulp.dest('dist'));
});

gulp.task('move_js',function(){
    del.sync('dist/js');
    return gulp.src('app/js/**/*.js')
    .pipe(gulp.dest('dist/js'));
});

gulp.task('img', function() {
    del.sync('dist/**/img');
    gulp.src('app/img/**/*') // Берем все изображения из app
        .pipe(cache(imagemin({  // Сжимаем их с наилучшими настройками с учетом кеширования
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('dist/img')); // Выгружаем на продакшен

    gulp.src('app/subdir/**/app/img/**/*')
     .pipe(cache(imagemin({  // Сжимаем их с наилучшими настройками с учетом кеширования
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('app','');
    }))
    .pipe(gulp.dest('dist'));
});

gulp.task('clean', function() {
    return del.sync('dist'); // Удаляем папку dist перед сборкой
});

gulp.task('build', ['clean','img' ,'build-libs' ,'sass'], function() {

    // Переносим CSS стили в продакшен
    gulp.src('app/css/**/*')
    .pipe(gulp.dest('dist'+'/css'));

    gulp.src('app/fonts/**/*') // Переносим шрифты в продакшен
    .pipe(gulp.dest('dist'+'/fonts'));

    gulp.src('app/js/**/*') // Переносим скрипты в продакшен
    .pipe(gulp.dest('dist'+'/js'));

    gulp.src('app/*.+(html|php)') // Переносим HTML/PHP в продакшен
    .pipe(gulp.dest('dist'));

    gulp.src('app/video/**/*')
    .pipe(gulp.dest('dist'+'/video'));

    gulp.src('app/subdir/**/app/css/**/*')
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('app','');
    }))
    .pipe(gulp.dest('dist'));

    gulp.src('app/subdir/**/app/fonts/**/*')
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('app','');
    }))
    .pipe(gulp.dest('dist'));

    gulp.src('app/subdir/**/app/js/**/*')
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('app','');
    }))
    .pipe(gulp.dest('dist'));

    gulp.src('app/subdir/**/app/*.+(html|php)')
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('app','');
    }))
    .pipe(gulp.dest('dist'));
});

gulp.task('clear', function () {
    return cache.clearAll();
});

gulp.task('default', ['watch']);