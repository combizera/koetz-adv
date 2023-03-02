<!-- BLOG -->
<section id="home-blog" class="home-blog container secao flex-center">
  <div class="secao-tit">
    <p>Leia nosso Blog</p>
    <h2>Conheça seus<span class="txt-red"> direitos</span></h2>
  </div>
  <div class="blog-cards">
    <div class="blog-card">
      <a href="https://koetzadvocacia.com.br/tabela-de-profissoes-para-aposentadoria-especial/">
        <img loading="lazy" src="<?php the_field('home-blog-ft1'); ?>" alt="Postagem 1">
        <p>Aposentadoria Especial: vantagens e quem tem direito?</p>
      </a>
      <div class="blog-card-hidden">
        <span>É possível ter uma tabela de profissões para aposentadoria especial? Apenas para períodos anteriores a 04/1995.</span>
        <a class="btn-ter" href="https://koetzadvocacia.com.br/tabela-de-profissoes-para-aposentadoria-especial/">Ler mais</a>
      </div>
    </div>

    <div class="blog-card">
      <a href="https://koetzadvocacia.com.br/aposentadoria-hoje/" class="blog-card">
        <img loading="lazy" src="<?php the_field('home-blog-ft2'); ?>" alt="Postagem 2">
        <p>Novas Aposentadorias: regras vigentes hoje! </p>
      </a>
      <div class="blog-card-hidden">
        <span>Quem não tem um sonho de conquistar a sua aposentadoria hoje? Muitos brasileiros aguardam por esse momento! Mas muita gente ainda fala que hoje em dia não é mais possível. Mas eu te digo: ainda é!</span>
         <a class="btn-ter" href="https://koetzadvocacia.com.br/aposentadoria-hoje/">Ler mais</a>
      </div>
    </div>

    <div class="blog-card">
      <a href="https://koetzadvocacia.com.br/modalidades-de-autorizacao-de-residencia-com-prazo-determinado/" class="blog-card">
        <img loading="lazy" src="<?php the_field('home-blog-ft3'); ?>" alt="Postagem 3">
        <p>Autorização de Residência para estrangeiros no Brasil</p>
      </a>
      <div class="blog-card-hidden">
        <span>Quem deseja morar no Brasil, em geral, vai precisar solicitar alguma das modalidades de autorização de  residência com prazo determinado.</span>
         <a class="btn-ter" href="https://koetzadvocacia.com.br/modalidades-de-autorizacao-de-residencia-com-prazo-determinado/">Ler mais</a>
      </div>
    </div>

    <div class="blog-card">
      <a href="https://koetzadvocacia.com.br/visto-de-investidor/" class="blog-card">
        <img loading="lazy" src="<?php the_field('home-blog-ft4'); ?>" alt="Postagem 4">
        <p>Golden Visa: oportunidades para investir no Brasil</p>
      </a>
      <div class="blog-card-hidden">
        <span>Neste texto explicaremos a função do visto do Mercosul, como tirar o visto do Mercosul no Brasil e quais são os requisitos na Polícia Federal. Entenda!</span>
         <a class="btn-ter" href="https://koetzadvocacia.com.br/visto-de-investidor/">Ler mais</a>
      </div>
    </div>
  </div>
  <a href="https://koetzadvocacia.com.br/entrar-em-contato-com-a-koetz-advocacia/" class="btn btn-pri">Entre em contato</a>

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
