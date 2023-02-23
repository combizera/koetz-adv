<?php 
// Template name: Home
get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <section class="hero flex-center">
      <div class="hero-txt flex-center container">
        <h1>Atendemos qualquer pessoa em qualquer lugar do <span class="txt-red"> mundo</span>!</h1>
        <a href="#" class="btn btn-pri">Entre em contato</a>
      </div>
    </section>

    <!-- CITAÇÃO -->
    <article id="citacao" class="bg-red">
      <div class="citacao flex-center container ">
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/martin_luther_jr.webp" alt="martin_luther_jr">
        <div>
          <h6><span class="aspas">“</span> Injustiça em qualquer lugar é uma ameaça a justiça em todo mundo.</h6>
          <p> - Martin Luther King Jr.</p>
        </div>
      </div>
    </article>

    <!-- SOLUÇÕES -->
    <section id="solucoes" class="solucoes secao container flex-center">
      <div class="solucoes-container grid-2">
        <div class="solucoes-txt">
          <div class="secao-tit">
            <p>Koetz Advocacia</p>
            <h2>Soluções Simples e <span class="txt-red"> Inteligentes</span> para Questões Complexas.</h2>
          </div>
          <p>Temos prazer em assumir casos complexos e difíceis, e mergulhar na
            busca da solução, pois confiamos muito no preparo da nossa equipe.
            <br><br>
            Nosso escritório é referência em inovação e tecnologia, mas nós
            acreditamos que precisamos ir muito além.
            Construir uma advocacia voltada para as pessoas e empresas
            que trabalham e produzem, e merecem respeito aos seus direitos.
          </p>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/globo.webp" alt="Globo">
      </div>
      <a href="#" class="btn btn-pri">Entre em contato</a>
    </section>

    <!-- ÁREAS DE ATUAÇÃO -->
    <section id="areas" class="areas container secao flex-center">
      <div class="secao-tit">
        <p>Veja as Nossas</p>
        <h2>Frentes de <span class="txt-red"> Atuação</span></h2>
      </div>
      <div class="areas-cards grid-4">
        <a href="#" class="areas-card flex-center area-card1">
          <h3>Benefícios &
            <br><span class="txt-red"> Previdência</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>
        <a href="#" class="areas-card flex-center area-card2">
          <h3>Tributos
            <br><span class="txt-red">Pessoais</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>
        <a href="#" class="areas-card flex-center area-card3">
          <h3>Trabalho e
            <br><span class="txt-red">migração</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>
        <a href="#" class="areas-card flex-center area-card4">
          <h3>Legalização
            <br><span class="txt-red">do estrangeiro</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>
      </div>
    </section>

    <!-- ARTICLE -->
    <article id="citacao2" class="bg-red flex-center">
      <div class="container">
        <h2>QUANDO O ESTADO E O MERCADO DESRESPEITAM A LEI, SÃO OS ADVOGADOS QUE SOCORREM AS PESSOAS.</h2>
      </div>
    </article>

    <!-- NOSSA EQUIPE -->
    <section class="equipe secao flex-center container">
      <div class="secao-tit">
        <p>Conheça os Líderes de Nossa Equipe</p>
        <h2>Vidas<span class="txt-red"> Dedicadas a luta</span> Por concretizar os direitos das pessoas.</h2>
      </div>
      <ul class="equipe-cards grid-5">
        <!-- CARD 1 | MARCELA -->
        <li class="equipe-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eduardo-koetz.png" alt="Eduardo Koetz">
          <div class="equipe-nome">
            <span>
              <strong class="equipe-nome__icon">+</strong> Eduardo Koetz
            </span>
          </div>
          <div class="equipe-info">
            <p>
              Advogado, professor e fundador da Koetz Advocacia, especialista em Direito Previdenciário, do Trabalho, Tributário e Gestão de escritório. Sua função é de gestor da Koetz Advocacia, supervisionando e auxiliando em todos os setores.
            </p>
          </div>
        </li>

        <!-- CARD 2 | MURILO -->
        <li class="equipe-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eduardo-koetz.png" alt="Eduardo Koetz">
          <div class="equipe-nome">
            <span>
              <strong class="equipe-nome__icon">+</strong> Eduardo Koetz
            </span>
          </div>
          <div class="equipe-info">
            <p>
              Advogado, professor e fundador da Koetz Advocacia, especialista em Direito Previdenciário, do Trabalho, Tributário e Gestão de escritório. Sua função é de gestor da Koetz Advocacia, supervisionando e auxiliando em todos os setores.
            </p>
          </div>
        </li>

        <!-- CARD 3 | EDUARDO -->
        <li class="equipe-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eduardo-koetz.png" alt="Eduardo">
          <div class="equipe-nome">
            <span>
              <strong class="equipe-nome__icon">+</strong> Eduardo Koetz
            </span>
          </div>
          <div class="equipe-info">
            <p>
              Advogado, professor e fundador da Koetz Advocacia, especialista em Direito Previdenciário, do Trabalho, Tributário e Gestão de escritório. Sua função é de gestor da Koetz Advocacia, supervisionando e auxiliando em todos os setores.
            </p>
          </div>
        </li>

        <!-- CARD 4 | GABRIELA -->
        <li class="equipe-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eduardo-koetz.png" alt="Eduardo Koetz">
          <div class="equipe-nome">
            <span>
              <strong class="equipe-nome__icon">+</strong> Eduardo Koetz
            </span>
          </div>
          <div class="equipe-info">
            <p>
              Advogado, professor e fundador da Koetz Advocacia, especialista em Direito Previdenciário, do Trabalho, Tributário e Gestão de escritório. Sua função é de gestor da Koetz Advocacia, supervisionando e auxiliando em todos os setores.
            </p>
          </div>
        </li>

        <!-- CARD 5 | LEANDRO -->
        <li class="equipe-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eduardo-koetz.png" alt="Eduardo Koetz">
          <div class="equipe-nome">
            <span>
              <strong class="equipe-nome__icon">+</strong> Eduardo Koetz
            </span>
          </div>
          <div class="equipe-info">
            <p>
              Advogado, professor e fundador da Koetz Advocacia, especialista em Direito Previdenciário, do Trabalho, Tributário e Gestão de escritório. Sua função é de gestor da Koetz Advocacia, supervisionando e auxiliando em todos os setores.
            </p>
          </div>
        </li>
      </ul>
      <a href="#" class="btn btn-pri">Entre em contato</a>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
          const $equipeCards = Array.from(document.querySelectorAll('.equipe-card'));
          const $container = document.querySelector('.equipe-cards');
          const rows = Math.round(($equipeCards.length + 1) / 2);

          const matchMedia = window.matchMedia('(max-width: 800px)');

          function handleEquipeCardClick(event) {
            const $card = event.currentTarget;
            $equipeCards.forEach((card) => {
              if (card.classList.contains('open')) {
                card.querySelector('.equipe-nome__icon').textContent = '+';
                card.classList.remove('open');
              } else if (card === $card) {
                $card.querySelector('.equipe-nome__icon').textContent = '-';
                $card.classList.add('open');
              }
            });
          }

          function handleEquipeCardEvents({ matches }) {
            const $fragment = document.createDocumentFragment();
            if (matches) {
              for (let i = 0; i < rows; i++) {
                const cardsIndex = [i * 2, i * 2 + 1];
                const $row = document.createElement('div');
                $row.classList.add('equipe-cards-row');
                cardsIndex.forEach((item) => {
                  if (!$equipeCards[item]) return;
                  $row.appendChild($equipeCards[item]);
                  $equipeCards[item].addEventListener('click', handleEquipeCardClick);
                });
                $fragment.appendChild($row);
              }
            } else {
              const $equipeCardsRows = $container.querySelectorAll('.equipe-cards-row');
              if ($equipeCardsRows.length === 0) return;
              $equipeCardsRows.forEach((row) => {
                const $equipeCards = Array.from(row.childNodes);
                $equipeCards.forEach((child) => {
                  child.removeEventListener('click', handleEquipeCardClick);
                  child.classList.remove('open');
                  $fragment.appendChild(child);
                });
                row.remove();
              });
            }
            $container.appendChild($fragment);
          }

          matchMedia.addEventListener('change', handleEquipeCardEvents);
          handleEquipeCardEvents(matchMedia);
        });
      </script>
    </section>

    <!-- CARDS BLOG -->
    <?php include(TEMPLATEPATH . "/assets/inc/cards-blog.php"); ?> 

    <!-- NA MÍDIA -->
    <section id="na-midia" class="midia container secao flex-center">
      <div class="secao-tit">
        <p>Fique por Dentro!</p>
        <h2>A Koetz Advocacia na <span class="txt-red">Mídia</span></h2>
      </div>
      <div class="midia-cards grid-4">
        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/Imagem 2.svg" alt="Folha de SP"></a>
        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/Imagem 2.svg" alt="Folha de SP"></a>
        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/Imagem 2.svg" alt="Folha de SP"></a>
        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/Imagem 2.svg" alt="Folha de SP"></a>
      </div>
    </section>

    <!-- CTA EMAIL -->
    <?php include(TEMPLATEPATH . "/assets/inc/cta-email.php"); ?> 

  </main>

  <?php endwhile; else: endif; ?>


<!-- Para pegar o Footer -->
<?php get_footer(); ?>