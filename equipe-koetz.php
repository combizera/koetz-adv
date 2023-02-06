<!-- Para pegar o Header -->
<?php get_header(); ?>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <section class="hero flex-center">
      <div class="hero-txt flex-center container">
        <h1>Conheça a <span class="txt-red">equipe</span> Koetz</h1>
      </div>
    </section>

    <!-- NOSSA EQUIPE -->
    <section class="adv container">
      <div class="pagination">Home / <strong>Nossa Equipe</strong></div>
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
    <article id="cta-email">
      <div class="cta-email container">
        <div class="cta-email-txt">
          <h2>Faremos mais que o possível para entregar os direitos aos nossos clientes, <span class="txt-red"> sempre</span>.</h2>
          <p>Insira seus dados ao lado e entraremos em contato com você.</p>
        </div>
        <div class="cta-email-form">
          <form action="#">
            <div class="form-base">
              <div class="input-box">
                <input id="name" name="name" type="text" required>
                <label for="name">Nome Completo</label>
              </div>
              <div class="input-box">
                <input id="email" name="email" type="email" required>
                <label for="email">Email</label>
              </div>
            </div>
            <div class="input-box">
              <textarea name="subject" id="subject" rows="1" required></textarea>
              <label for="subject">Assunto</label>
            </div>
            <button class="btn btn-sec" type="submit">Entre em contato</button>
          </form>
        </div>
      </div>
    </article>
  </main>

<!-- Para pegar o Footer -->
<?php get_footer(); ?>