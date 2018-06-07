var gulp = require('gulp'),     
	sass = require('gulp-sass'),       
	browserSync = require('browser-sync'),
	plumber = require('gulp-plumber'),	
	autoprefixer = require('gulp-autoprefixer');   

gulp.task('sass', function () {
     return gulp.src('app/sass/**/*.sass') /*Указываем путь до главного sass файла*/         
 		.pipe(plumber())  /*Продолжаем отслеживание в случае ошибки компиляции*/         
 		.pipe(sass())  /*Запускаем компиляцию из sass в css*/         
 		.pipe(autoprefixer(['last 15 versions']))  /*Говорим что нужно использовать префиксы для поддержки браузерами*/
 		.pipe(gulp.dest('app/css'))  /*Выгружаем минифицированный и не сжатый css файлы*/         
 		.pipe(browserSync.reload({stream: true}))  /*Обновляем браузер в случае отработки данной задачи*/ 

});


gulp.task('liveReload', function () {     
	browserSync({         
		server: {             
			baseDir: 'app' /*Указываем главную папку со скриптами*/         
		},         
		notify: false /*Отключаем уведомления в браузере для комфортной работы*/     }) 
});
gulp.task('watch', ['liveReload', 'sass'], function () {     
	gulp.watch('app/sass/**/*.sass', ['sass']); /*Указываем путь на отслеживание sass файлов и собственно саму задачу*/     
	gulp.watch('app/**/*.html', browserSync.reload); /*Указываем путь на отслеживание всех html файлов и команду на перезагрузку браузера*/     
	gulp.watch('app/js/**/*.js', browserSync.reload);
	
});