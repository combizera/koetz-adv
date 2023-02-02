// Adiciona os módulos instalados
const GulpClient = require("gulp");
const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const browserSync = require("browser-sync").create();

// Funções para compilar o SASS e adicionar os prefixos
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
    .pipe(gulp.dest("assets/css/"))
    .pipe(browserSync.stream());
}

// Tarefa de Gulp para a função de SASS
gulp.task("sass", compilaSass);

// Anotação mental, tarefa eu posso executar qnts eu quiser, função é apenas uma

// Função para iniciar o Browser
function browser() {
  browserSync.init({
    server: {
      baseDir: "./",
    },
  });
}

// Tarefa para iniciar o Browser Sync
gulp.task("browser-sync", browser);

// Função de Watch do Gulp
function watch() {
  gulp.watch("assets/css/scss/**/**/*.scss", compilaSass);
  gulp.watch("['*.html']").on("change", browserSync.reload);
}

// Inicia a tarefa de Watch
gulp.task("watch", watch);

// Tarefa padrão do  GulpClient, que inicia o watch e o browser sync
gulp.task("default", gulp.parallel("watch", "browser-sync"));
