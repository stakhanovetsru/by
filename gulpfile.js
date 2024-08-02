const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const purgecss = require('gulp-purgecss');


// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', async function () {
    return gulp.src("assets/scss/*.scss")
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest("assets/css/"));
});

gulp.task('purgecss', async function () {
    return gulp.src('assets/css/*.css')
        .pipe(purgecss({
            content: ['*.php', '**/*.php']
        }))
        .pipe(gulp.dest("css/"));
});


gulp.task('default', gulp.series('sass', 'purgecss'));