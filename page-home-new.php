<?php
// Template name: Home New
get_header("2023"); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
		<?php
		$hero = get_field('hero');
			if( $hero ): ?>
    <section class="hero flex-center">
      <div class="hero-txt flex-center container">
        <h1>Atendemos qualquer pessoa em qualquer lugar do <span class="txt-red"> mundo</span>!</h1>
        <a target"_blank" href="<?php echo $hero['link_cta_principal']; ?>" class="btn btn-pri"><?php echo $hero['texto_cta_principal']; ?></a>
      </div>
		<?php endif; ?>
    </section>

    <!-- CITAÇÃO -->
    <article id="citacao" class="bg-red">
		<?php
		$citacao = get_field('citacao');
			if( $citacao ): ?>
      <div class="citacao flex-center container ">
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/martin_luther_jr.webp" alt="martin_luther_jr">
        <div>
          <h6><span class="aspas">“</span><?php echo $citacao['texto']; ?> </h6>
          <p> - <?php echo $citacao['autor']; ?></p>
        </div>
      </div>
		<?php endif; ?>
    </article>

    <!-- SOLUÇÕES -->
    <section id="solucoes" class="solucoes secao container flex-center">
		<?php
		$solucoes = get_field('solucoes');
			if( $solucoes ): ?>
      <div class="solucoes-container grid-2">
        <div class="solucoes-txt">
          <div class="secao-tit">
            <p>Koetz Advocacia</p>
            <h2>Soluções Simples e <span class="txt-red"> Inteligentes</span> para Questões Complexas.</h2>
          </div>
          <p><?php echo $solucoes['texto']; ?></p>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/globo.webp" alt="Globo">
      </div>
      <a href="<?php echo $solucoes['link']; ?>" class="btn btn-pri"><?php echo $solucoes['cta']; ?></a>
    <?php endif; ?>
	  </section>

    <!-- ÁREAS DE ATUAÇÃO -->
    <section id="areas" class="areas container secao flex-center">
      <div class="secao-tit">
        <p>Veja as Nossas</p>
        <h2>Frentes de <span class="txt-red"> Atuação</span></h2>
      </div>
      <div class="areas-cards grid-4">
        <a href="https://koetzadvocacia.com.br/entrar-em-contato-com-a-koetz-advocacia/" class="areas-card flex-center area-card1">
          <h3>Benefícios &
            <br><span class="txt-red"> Previdência</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>
        <a href="https://koetzadvocacia.com.br/entrar-em-contato-com-a-koetz-advocacia/" class="areas-card flex-center area-card2">
          <h3>Tributos
            <br><span class="txt-red">Pessoais</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>
        <a href="https://koetzadvocacia.com.br/entrar-em-contato-com-a-koetz-advocacia/" class="areas-card flex-center area-card3">
          <h3>Trabalho e
            <br><span class="txt-red">migração</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>
        <a href="https://koetzadvocacia.com.br/entrar-em-contato-com-a-koetz-advocacia/" class="areas-card flex-center area-card4">
          <h3>Legalização
            <br><span class="txt-red">do estrangeiro</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>
      </div>
    </section>

    <!-- ARTICLE -->
    <article id="citacao2" class="bg-red flex-center">
		<?php
		$citacao_2 = get_field('citacao_2');
			if( $citacao_2 ): ?>
      <div class="container">
        <h2><?php echo $citacao_2['texto']; ?></h2>
      </div>
		<?php endif; ?>
    </article>

    <!-- NOSSA EQUIPE -->
    <section class="equipe secao flex-center container">
      <div class="secao-tit">
        <p>Conheça os Líderes de Nossa Equipe</p>
        <h2>Vidas<span class="txt-red"> Dedicadas a luta</span> Por concretizar os direitos das pessoas.</h2>
      </div>
      <ul class="equipe-cards">
        <!-- CARD 1 | MARCELA -->
        <li class="equipe-card">
          <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/marcela.webp" alt="Marcela Cunha">
          <div class="equipe-nome">
            <span>
              <strong class="equipe-nome__icon">+</strong> Marcela Cunha
            </span>
          </div>
          <div class="equipe-info">
            <p>
            Advogada especialista em Direito Previdenciário com mais de 10 anos de experiência. Atua hoje no gerenciamento da equipe no setor de contratação e atendimento aos novos clientes.
            </p>
          </div>
        </li>

        <!-- CARD 2 | MURILO -->
        <li class="equipe-card">
          <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/murilo.webp" alt="Murilo Mella">
          <div class="equipe-nome">
            <span>
              <strong class="equipe-nome__icon">+</strong> Murilo Mella
            </span>
          </div>
          <div class="equipe-info">
            <p>
            Advogado especialista em Direito Previdenciário, processual e constitucional com mais de 10 anos de experiência. Atua hoje no gerenciamento de equipe técnica-jurídica e na área recursal para o Supremo Tribunal Federal.
            </p>
          </div>
        </li>

        <!-- CARD 3 | EDUARDO -->
        <li class="equipe-card">
          <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eduardo.webp" alt="Eduardo">
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
          <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gabriela.webp" alt="Gabriela Carlotto">
          <div class="equipe-nome">
            <span>
              <strong class="equipe-nome__icon">+</strong> Gabriela Carlotto
            </span>
          </div>
          <div class="equipe-info">
            <p>
            Advogada especialista em Direito Previdenciário com foco em Comunicação não violenta e psicologia no atendimento ao público. Atua hoje no gerenciamento da equipe de atendimento ao cliente previdenciário do escritório.
            </p>
          </div>
        </li>

        <!-- CARD 5 | LEANDRO -->
        <li class="equipe-card">
          <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/leandro.webp" alt="Leandro Sturmer">
          <div class="equipe-nome">
            <span>
              <strong class="equipe-nome__icon">+</strong> Leandro Sturmer
            </span>
          </div>
          <div class="equipe-info">
            <p>
            Advogado especialista em Direito Previdenciário com atuação no setor de produção jurídica e análise probatória. Atua hoje garantindo altas taxas de vitória nos processos judiciais do escritório e gerenciando o trabalho da equipe de advogados.
            </p>
          </div>
        </li>

        <li class="equipe-card equipe-card--more">
          <div>
            <h3>Conheça o restante de nossa equipe</h3>
            <p>Exemplo de um serviço jurídico cada vez melhor, para um público cada vez maior, com mais qualidade.</p>
            <a href="#">Ver mais</a>
          </div>
        </li>
      </ul>
      <a href="https://koetzadvocacia.com.br/entrar-em-contato-com-a-koetz-advocacia/" class="btn btn-pri">Entre em contato</a>

      <script defer>
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
                  if ($equipeCards[item].classList.contains('equipe-card--more')) return;
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
    <?php include(STYLESHEETPATH
 . "/assets/inc/cards-blog.php"); ?>

     <!-- NA MÍDIA -->
     <section id="na-midia" class="midia container secao flex-center">
      <div class="secao-tit">
        <p>Fique por Dentro!</p>
        <h2>A Koetz Advocacia na <span class="txt-red">Mídia</span></h2>
      </div>
      <div class="midia-cards grid-4">
        <a href="https://www1.folha.uol.com.br/mercado/2018/11/crise-no-emprego-eleva-em-14-milhao-o-numero-de-consultas-psiquiatricas.shtml"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/folha-de-sao-paulo.svg" alt="Folha de SP"></a>
        <a href="https://www.conjur.com.br/2018-set-25/koetz-advocacia-primeiro-escritorio-100-digital-pais"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/conjur.webp" alt="Conjur"></a>
        <a href="https://oglobo.globo.com/economia/aposentado-que-vive-no-exterior-consegue-barrar-desconto-de-25-de-ir-23100200"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/o-globo.webp" alt="O Globo"></a>
        <a href="https://veja.abril.com.br/economia/aposentados-que-moram-fora-conseguem-se-livrar-de-desconto-de-ir-de-25/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/veja.svg" alt="Revista Veja"></a>
      </div>
    </section>

    <!-- CTA EMAIL -->
    <?php include(STYLESHEETPATH
    . "/assets/inc/cta-email.php"); ?>

  </main>

  <?php endwhile; else: endif; ?>

<?php get_footer("2023"); ?>
