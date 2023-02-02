const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");

function compilaSass() {
  return gulp
    .src("assets/css/scss/**/**/*.scss")
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(
      autoprefixer({
        cascade: false,
        browsers: ["last 2 versions"],
      })
    )
    .pipe(gulp.dest("assets/css/"));
}

gulp.task("sass", compilaSass);
