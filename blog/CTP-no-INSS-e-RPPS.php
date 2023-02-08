<?php 
// Template name: Blog
get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- MAIN -->
  <main class="container">
    <!-- BLOG GERAL -->
    <div class="blog-grid-container container">
      
      <!-- BLOG MAIN -->
      <section class="blog-main">
        <div class="blog-post">
          <div class="blog-post-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/foto.png" alt="Postagem blog"></div>
          <p class="blog-post-category">Aposentadoria Especial do Servidor Público / Servidor Público / Servidores Concursados e Filiados ao INSS</p>
          <div class="blog-post-autor">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/autor.png" alt="Autor">
            <p class="blog-data">Marcela Cunha</p>
            <span class="red-ball"></span>
            <p class="blog-data">2 de jan de 2023</p>
          </div>
          <h2>CTC no INSS e RPPS - Tudo sobre a Certidão de Tempo de Contribuição.</h2>
          <p>blablabla</p>
          <div class="blog-post-links">
            <div class="blog-post-sociais">
              <p>Compartilhar:
              <nav>
                <ul>
                  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/icons/facebook-dark.svg" alt="Ícone do Facebook"></a></li>
                  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/icons/instagram-dark.svg" alt="Ícone do Instagram"></a></li>
                  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/icons/linkedin-dark.svg" alt="Ícone do Linkedin"></a></li>
                  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/icons/twitter-dark.svg" alt="Ícone do Twitter"></a></li>
                </ul>
              </nav>
              </p>
            </div>
          </div>

          <div class="blog-post-card-autor">
            <div class="card-autor-img">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/colaborador 1.png" alt="colaboradror">
            </div>
            <div class="card-autor-txt">
              <p>Advogada Associada</p>
              <h3>Isabella Almeida</h3>
              <p>Advogada Especialista em Direito Previdenciário e Tributário Sócio da Koetz Advocacia, professor da Pós Graduação.</p>
              <nav>
                <ul>
                  <li>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/icons/facebook-dark.svg" alt="Ícone do Facebook"></a>
                  </li>
                  <li>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/icons/instagram-dark.svg" alt="Ícone do Instagram"></a>
                  </li>
                  <li>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/icons/linkedin-dark.svg" alt="Ícone do Linkedin"></a>
                  </li>
                  <li>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/icons/twitter-dark.svg" alt="Ícone do Twitter"></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="blog-post-relacionados">
            <h2>Posts Relacionados</h2>
            <div class="grid-2">
              <div class="blog-post-relacionado-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/post3.png" alt="Postagem">
                <h3>Aposentadoria da Marinha: regras e como averbar no INSS ou RPPS?</h3>
                <p>A CTC (Certidão de Tempo de Contribuição) no INSS pode acelerar sua aposentadoria…</p>
                <div><span class="blog-data">2 de jan de 2023</span><a href="#" class="btn btn-ter">Ler mais</a></div>
              </div>
              <div class="blog-post-relacionado-card">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/post3.png" alt="Postagem">
                <h3>Aposentadoria da Marinha: regras e como averbar no INSS ou RPPS?</h3>
                <p>A CTC (Certidão de Tempo de Contribuição) no INSS pode acelerar sua aposentadoria…</p>
                <div><span class="blog-data">2 de jan de 2023</span><a href="#" class="btn btn-ter">Ler mais</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- BLOG ASIDE -->
      <aside class="blog-aside">

        <!-- CAMPO DE BUSCA -->
        <div class="aside-card blog-aside-busca">busca</div>

        <!-- CTA EMAIL -->
        <?php include(TEMPLATEPATH . "/assets/inc/cta-email.php"); ?> 

        <!-- POSTS POPULARES -->
        <div class="aside-card blog-aside-posts">
          <p class="aside-tit">Posts Populares</p>
          <nav>
            <ul>
              <li>
                <a class="blog-aside-post" href="#">
                  <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/colaborador 1.png" alt="Post blog">
                    <span class="aside-numero">1</span>
                  </div>
                  <div>
                    <p class="aside-post-tit">CTC no INSS e RPPS - tudo sobre a Certidão de Nascimento</p>
                    <span>2 de jan de 2023</span>
                  </div>
                </a>
              </li>
              <li>
                <a class="blog-aside-post" href="#">
                  <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/hero-blog.png" alt="Post blog">
                    <span class="aside-numero">2</span>
                  </div>
                  <div>
                    <p class="aside-post-tit">CTC no INSS e RPPS - tudo sobre a Certidão de Nascimento</p>
                    <span>2 de jan de 2023</span>
                  </div>
                </a>
              </li>
              <li>
                <a class="blog-aside-post" href="#">
                  <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/../assets/img/colaborador 1.png" alt="Post blog">
                    <span class="aside-numero">3</span>
                  </div>
                  <div>
                    <p class="aside-post-tit">CTC no INSS e RPPS - tudo sobre a Certidão de Nascimento</p>
                    <span>2 de jan de 2023</span>
                  </div>
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="aside-card blog-aside-category">
          <p class="aside-tit">Categorias</p>
          <nav>
            <ul>
              <li>
                <a href="#">
                  <p class="blog-aside-category-name">Aposentadoria especial</p>
                  <p class="blog-aside-category-number">(10)</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
    </div>

    <!-- MODAL MENU -->
    <nav class="header-modal" data-modal-menu="container">
      <button class="hamburguer-fechar" data-modal-menu="fechar"></button>
      <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="beneficios-e-previdencias.html">Benefícios & Previdência</a></li>
        <li><a href="#">Tributos Pessoais</a></li>
        <li><a href="#">Trabalho e Migração</a></li>
        <li><a href="#">Legalização do Estrangeiro</a></li>
        <li>
          <ul class="header-modal-sociais">
            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="Ícone do Facebook da Koetz Advocacia"></a></li>
            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/instagram.svg" alt="Ícone do Instagram da Koetz Advocacia"></a></li>
            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/linkedin.svg" alt="Ícone do Linkedin da Koetz Advocacia"></a></li>
            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/twitter.svg" alt="Ícone do Twitter da Koetz Advocacia"></a></li>
            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/youtube.svg" alt="Ícone do Youtube da Koetz Advocacia"></a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </main>

  <?php endwhile; else: endif; ?>

<!-- Pegar o Footer -->
<?php get_footer(); ?>