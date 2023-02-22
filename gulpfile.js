// Adiciona os módulos instalados
const GulpClient = require("gulp");
const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const browserSync = require("browser-sync").create();

// Funções para compilar o SASS e adicionar os prefixos
// Inserir isso depois
// .pipe(sass({ outputStyle: "compressed" }))
function compilaSass() {
  return gulp
    .src("assets/css/scss/**/*.scss")
    .pipe(sass())
    .pipe(
      autoprefixer({
        cascade: false,
      })
    )
    .pipe(gulp.dest("./"))
    .pipe(browserSync.stream());
}

// Tarefa de Gulp para a função de SASS
gulp.task("sass", compilaSass);

// Anotação mental, tarefa eu posso executar qnts eu quiser, função é apenas uma

// Função para iniciar o Browser
function browser() {
  browserSync.init({
    proxy: process.env.URL_LOCAL, // Coloque aqui a URL do site no local
    open: false,
  });
}

// Tarefa para iniciar o Browser Sync
gulp.task("browser-sync", browser);

// Função de Watch do Gulp
function watch() {
  gulp.watch("assets/css/scss/**/*.scss", gulp.parallel("sass"));
  gulp
    .watch(["*.html", "**/*.js", "assets/css/*.css"])
    .on("change", browserSync.reload);
}

// Inicia a tarefa de Watch
gulp.task("watch", watch);

// Tarefa padrão do GulpClient, que inicia o watch e o browser sync
gulp.task("default", gulp.parallel("watch", "browser-sync"));
