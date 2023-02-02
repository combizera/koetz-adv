const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));

function compilaSass() {
  return gulp
    .src("assets/css/scss/**/**/*.scss")
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(gulp.dest("assets/css/"));
}

gulp.task("sass", compilaSass);
