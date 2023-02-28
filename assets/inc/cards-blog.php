<!-- BLOG -->
<section id="home-blog" class="home-blog container secao flex-center">
  <div class="secao-tit">
    <p>Leia nosso Blog</p>
    <h2>Conheça seus<span class="txt-red"> direitos</span></h2>
  </div>
  <div class="blog-cards">
    <div class="blog-card">
      <a href="#">
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post1.png" alt="Postagem 1">
        <p>Visto Mercosul no Brasil: isenções, regras, residência e mais.</p>
      </a>
      <div class="blog-card-hidden">
        <span>Neste texto explicaremos a função do visto do Mercosul, como tirar o visto do Mercosul no Brasil e quais são os requisitos na Polícia Federal. Entenda!</span>
        <a class="btn-ter" href="blog.html">Ler mais</a>
      </div>
    </div>

    <div class="blog-card">
      <a href="#" class="blog-card">
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post2.png" alt="Postagem 2">
        <p>Aposentados do INSS: direitos, atrasados e revisão de benefício.</p>
      </a>
      <div class="blog-card-hidden">
        <span>Neste texto explicaremos a função do visto do Mercosul, como tirar o visto do Mercosul no Brasil e quais são os requisitos na Polícia Federal. Entenda!</span>
         <a class="btn-ter" href="blog.html">Ler mais</a>
      </div>
    </div>

    <div class="blog-card">
      <a href="#" class="blog-card">
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post3.png" alt="Postagem 3">
        <p>Aposentadoria Rural hoje: quais os requisitos do INSS?</p>
      </a>
      <div class="blog-card-hidden">
        <span>Neste texto explicaremos a função do visto do Mercosul, como tirar o visto do Mercosul no Brasil e quais são os requisitos na Polícia Federal. Entenda!</span>
         <a class="btn-ter" href="blog.html">Ler mais</a>
      </div>
    </div>

    <div class="blog-card">
      <a href="#" class="blog-card">
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post4.png" alt="Postagem 4">
        <p>Revisão do Artigo 29: aposentadoria por invalidez e auxílio…</p>
      </a>
      <div class="blog-card-hidden">
        <span>Neste texto explicaremos a função do visto do Mercosul, como tirar o visto do Mercosul no Brasil e quais são os requisitos na Polícia Federal. Entenda!</span>
         <a class="btn-ter" href="blog.html">Ler mais</a>
      </div>
    </div>
  </div>
  <a href="#" class="btn btn-pri">Entre em contato</a>

  <script defer>
    document.addEventListener('DOMContentLoaded', function () {
      function handleMouseEnter(e) {
        e.currentTarget.scrollIntoView({
          behavior: 'smooth',
          block: 'nearest',
          inline: 'center'
        });
      }

      const $blogCards = document.querySelectorAll('.blog-cards > .blog-card');
      $blogCards.forEach((card) => card.addEventListener('mouseenter', handleMouseEnter));
    });
  </script>
</section>
