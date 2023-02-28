<?php 
// Template name: Equipe (NEW)
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <?php include(TEMPLATEPATH . "/assets/inc/hero.php"); ?> 
    <!-- NOSSA EQUIPE -->
    <section class="adv container">

      <!-- MAPPING -->
      <?php include(TEMPLATEPATH . "/assets/inc/mapping.php"); ?> 
      <div class="equipe-box secao">
        <nav class="equipe-nav js-tabmenu">
          <ul>
            <li class="active"><a href="#">SÓCIOS</a></li>
            <li><a href="#">ADVOGADOS ASSOCIADOS</a></li>
            <li><a href="#">ADMINISTRATIVO</a></li>
            <li><a href="#">ASSISTENTES JURÍDICOS</a></li>
            <li><a href="#">COMUNICAÇÃO</a></li>
          </ul>
        </nav>

        <nav class="equipe-txt js-tabcontent">
          <article id="equipe-socios" class="grid-4">
            <div class="equipe-txt-card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colaborador 1.png" alt="funcionario">
              <div class="equipe-txt-adv">
                <p class="equipe-txt-cat">Advogado Associado</p>
                <p class="equipe-txt-nome">Isabella Almeida</p>
                <div class="equipe-txt-hidden">
                  <p class="equipe-txt-desc">Isabella faz parte da equipe de análise de novos casos e planejamentos.</p>
                  <p class="equipe-txt-oab">OAB-SC/90.201</p>
                </div>
              </div>
            </div>
          </article>

          <article id="equipe-associados" class="grid-4">
            <div class="equipe-txt-card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colaborador 1.png" alt="funcionario">
              <div class="equipe-txt-adv">
                <p class="equipe-txt-cat">Advogado Associado</p>
                <p class="equipe-txt-nome">Isabella Almeida</p>
                <div class="equipe-txt-hidden">
                  <p class="equipe-txt-desc">Isabella faz parte da equipe de análise de novos casos e planejamentos.</p>
                  <p class="equipe-txt-oab">OAB-SC/90.201</p>
                </div>
              </div>
            </div>

            <div class="equipe-txt-card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colaborador 1.png" alt="funcionario">
              <div class="equipe-txt-adv">
                <p class="equipe-txt-cat">Advogado Associado</p>
                <p class="equipe-txt-nome">Isabella Almeida</p>
                <div class="equipe-txt-hidden">
                  <p class="equipe-txt-desc">Isabella faz parte da equipe de análise de novos casos e planejamentos.</p>
                  <p class="equipe-txt-oab">OAB-SC/90.201</p>
                </div>
              </div>
            </div>

          </article>

          <article id="equipe-administrativo" class="grid-4">
            <div class="equipe-txt-card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colaborador 1.png" alt="funcionario">
              <div class="equipe-txt-adv">
                <p class="equipe-txt-cat">Advogado Associado</p>
                <p class="equipe-txt-nome">Isabella Almeida</p>
                <div class="equipe-txt-hidden">
                  <p class="equipe-txt-desc">Isabella faz parte da equipe de análise de novos casos e planejamentos.</p>
                  <p class="equipe-txt-oab">OAB-SC/90.201</p>
                </div>
              </div>
            </div>

            <div class="equipe-txt-card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colaborador 1.png" alt="funcionario">
              <div class="equipe-txt-adv">
                <p class="equipe-txt-cat">Advogado Associado</p>
                <p class="equipe-txt-nome">Isabella Almeida</p>
                <div class="equipe-txt-hidden">
                  <p class="equipe-txt-desc">Isabella faz parte da equipe de análise de novos casos e planejamentos.</p>
                  <p class="equipe-txt-oab">OAB-SC/90.201</p>
                </div>
              </div>
            </div>

            <div class="equipe-txt-card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colaborador 1.png" alt="funcionario">
              <div class="equipe-txt-adv">
                <p class="equipe-txt-cat">Advogado Associado</p>
                <p class="equipe-txt-nome">Isabella Almeida</p>
                <div class="equipe-txt-hidden">
                  <p class="equipe-txt-desc">Isabella faz parte da equipe de análise de novos casos e planejamentos.</p>
                  <p class="equipe-txt-oab">OAB-SC/90.201</p>
                </div>
              </div>
            </div>
          </article>

          <article id="equipe-assistentes" class="grid-4">

          </article>

          <article id="equipe-comunicacao" class="grid-4">

          </article>
        </nav>
      </div>
    </section>

    <!-- CTA EMAIL -->
    <?php include(TEMPLATEPATH . "/assets/inc/cta-email.php"); ?> 
  </main>

  <?php endwhile; else: endif; ?>

<!-- Para pegar o Footer -->
<?php get_footer(); ?>