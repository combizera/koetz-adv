<?php
// Template name: Blog (NEW)
get_header(); ?>

  <?php include(TEMPLATEPATH . "/assets/inc/hero.php"); ?>

  <!-- MAIN -->
  <main class="container">
    <!-- HERO -->
    <section class="hero">
      <div class="blog-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-blog.png" alt="Hero Blog">
      </div>
      <div class="hero-txt">
        <h1>Tributos</h1>
        <h2>Brasileiros que vivem no exterior</h2>
        <a href="/blog/CTP-no-INSS-e-RPPS.php" class="btn btn-pri-dark">Ler mais</a>
      </div>
    </section>

    <!-- BLOG GERAL -->
    <div class="blog-grid-container container">
      <!-- BLOG MAIN -->
      <section class="blog-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
            <div class="blog-post-img">
              <img
                src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>"
                alt="<?php the_title(); ?>"
              />
            </div>
            <p class="blog-post-category">
              <?php
              $post_categories = array_filter(
                wp_get_post_categories(get_the_ID(), [ 'fields' => 'names' ]),
                fn ($cat) => $cat !== 'Uncategorized' ? $cat : null
              );
              echo join(' / ', $post_categories);
              ?>
            </p>
            <div class="blog-post-autor">
              <img
                src="<?php echo get_avatar_url( get_the_author_meta('ID') ); ?>"
                alt="<?php echo get_the_author_meta('display_name'); ?>"
              />
              <p class="blog-data">
                <?php echo get_the_author_meta('display_name'); ?>
              </p>
              <span class="red-ball"></span>
              <p class="blog-data">
                <?php echo strtolower( get_the_date() ); ?>
              </p>
            </div>
            <h2><?php the_title(); ?></h2>
            <div class="blog-post-links">
              <div class="blog-post-sociais">
                <p>Compartilhar:
                <nav>
                  <ul>
                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook-dark.svg" alt="Ícone do Facebook"></a></li>
                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/instagram-dark.svg" alt="Ícone do Instagram"></a></li>
                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/linkedin-dark.svg" alt="Ícone do Linkedin"></a></li>
                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/twitter-dark.svg" alt="Ícone do Twitter"></a></li>
                  </ul>
                </nav>
                </p>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-pri">
                Ler mais
              </a>
            </div>
          </div>
        <?php endwhile; endif; ?>

        <div class="blog-mapping">Paginação</div>
      </section>

      <!-- BLOG ASIDE -->
      <aside class="blog-aside">

        <!-- CAMPO DE BUSCA -->
        <div class="aside-card blog-aside-busca">busca</div>

        <!-- CTA EMAIL  -->
        <div class="aside-card blog-aside-email">
          <p class="aside-tit">Deseja Falar com a nossa <span class="txt-red"> equipe</span>?</p>
          <p>Preencha os dados abaixo para receber as informações de contato dos nossos advogados.</p>
          <div class="form-base">
            <form action="#">
              <div class="form-base">
                <div class="input-box">
                  <input id="name" name="name" type="text" required>
                  <label for="name">Nome *</label>
                </div>
                <div class="input-box">
                  <input id="email" name="email" type="email" required>
                  <label for="email">Email *</label>
                </div>
                <div class="input-box input-checkbox">
                  <input type="checkbox" name="checkbox" id="checkbox" required>
                  <label for="checkbox" name="checkbox">Eu concordo em receber informações via e-mail.</label>
                </div>
              </div>
              <button class="btn btn-sec" type="submit">Solicitar Contato</button>
            </form>
          </div>
        </div>

        <!-- POSTS POPULARES -->
        <div class="aside-card blog-aside-posts">
          <p class="aside-tit">Posts Populares</p>
          <nav>
            <ul>
              <li>
                <a class="blog-aside-post" href="#">
                  <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colaborador 1.png" alt="Post blog">
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-blog.png" alt="Post blog">
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colaborador 1.png" alt="Post blog">
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
  </main>

  <!-- CTA EMAIL -->
  <?php include(TEMPLATEPATH . "/assets/inc/cta-email.php"); ?>

<!-- Para pegar o Footer -->
<?php get_footer(); ?>
