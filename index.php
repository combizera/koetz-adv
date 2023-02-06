<!-- Para pegar o Header -->
<?php get_header(); ?>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <section class="hero flex-center">
      <div class="hero-txt flex-center container">
        <h1>Atendemos qualquer pessoa em qualquer lugar do mundo!</h1>
        <a href="#" class="btn btn-pri">Entre em contato</a>
      </div>
    </section>

    <!-- CITAÇÃO -->
    <article id="citacao" class="bg-red">
      <div class="citacao flex-center">
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
    <section class="equipe secao flex-center">
      <div class="secao-tit">
        <p>Conheça os Líderes de Nossa Equipe</p>
        <h2>Vidas<span class="txt-red"> Dedicadas a luta</span> Por concretizar os direitos das pessoas.</h2>
      </div>
      <ul class="equipe-cards grid-5">
        <!-- CARD 1 | MARCELA -->
        <li class="equipe-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/eduardo-koetz.png" alt="Eduardo Koetz">
          <div class="equipe-nome">
            <span>Eduardo Koetz</span>
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
            <span>Eduardo Koetz</span>
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
            <span>Eduardo Koetz</span>
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
            <span>Eduardo Koetz</span>
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
            <span>Eduardo Koetz</span>
          </div>
          <div class="equipe-info">
            <p>
              Advogado, professor e fundador da Koetz Advocacia, especialista em Direito Previdenciário, do Trabalho, Tributário e Gestão de escritório. Sua função é de gestor da Koetz Advocacia, supervisionando e auxiliando em todos os setores.
            </p>
          </div>
        </li>
      </ul>
      <a href="#" class="btn btn-pri">Entre em contato</a>
    </section>

    <!-- BLOG -->
    <section id="home-blog" class="home-blog container secao flex-center">
      <div class="secao-tit">
        <p>Leia nosso Blog</p>
        <h2>Conheça seus<span class="txt-red"> direitos</span></h2>
      </div>
      <div class="blog-cards">
        <div class="blog-card">
          <a href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post1.png" alt="Postagem 1">
            <p>Visto Mercosul no Brasil: isenções, regras, residência e mais.</p>
          </a>
          <div class="blog-card-hidden">
            <span>Neste texto explicaremos a função do visto do Mercosul, como tirar o visto do Mercosul no Brasil e quais são os requisitos na Polícia Federal. Entenda!</span>
            <a href="blog.html">Ler mais</a>
          </div>
        </div>

        <div class="blog-card">
          <a href="#" class="blog-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post2.png" alt="Postagem 2">
            <p>Aposentados do INSS: direitos, atrasados e revisão de benefício.</p>
          </a>
          <div class="blog-card-hidden">
            <span>Neste texto explicaremos a função do visto do Mercosul, como tirar o visto do Mercosul no Brasil e quais são os requisitos na Polícia Federal. Entenda!</span>
            <a href="blog.html">Ler mais</a>
          </div>
        </div>

        <div class="blog-card">
          <a href="#" class="blog-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post3.png" alt="Postagem 3">
            <p>Aposentadoria Rural hoje: quais os requisitos do INSS?</p>
          </a>
          <div class="blog-card-hidden">
            <span>Neste texto explicaremos a função do visto do Mercosul, como tirar o visto do Mercosul no Brasil e quais são os requisitos na Polícia Federal. Entenda!</span>
            <a href="blog.html">Ler mais</a>
          </div>
        </div>

        <div class="blog-card">
          <a href="#" class="blog-card">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post4.png" alt="Postagem 4">
            <p>Revisão do Artigo 29: aposentadoria por invalidez e auxílio…</p>
          </a>
          <div class="blog-card-hidden">
            <span>Neste texto explicaremos a função do visto do Mercosul, como tirar o visto do Mercosul no Brasil e quais são os requisitos na Polícia Federal. Entenda!</span>
            <a href="blog.html">Ler mais</a>
          </div>
        </div>
      </div>
      <a href="#" class="btn btn-pri">Entre em contato</a>
    </section>

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

<!-- Para pegar o Footer -->
<?php get_footer(); ?>