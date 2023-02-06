<!-- Para pegar o Header -->
<?php get_header(); ?>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <section class="hero flex-center">
      <div class="hero-txt flex-center container">
        <h1>Conheça os benefícios e <span class="txt-red">previdências</span></h1>
      </div>
    </section>

    <!-- BENEFÍCIOS E PREVIDÊNCIAS -->
    <section class="beneficios container">
      <div class="pagination">Home / <strong>Benefícios e previdências</strong></div>

      <div class="grid-4 secao">
        <a href="#" class="areas-card flex-center area-card1">
          <h3>Aposentadorias
            <br><span class="txt-red"> Gerais</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>

        <a href="#" class="areas-card flex-center area-card1">
          <h3>Aposentadoria por
            <br><span class="txt-red">Insalubridade/ <br>Periculosidade</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>

        <a href="#" class="areas-card flex-center area-card1">
          <h3>Benefícios por
            <br><span class="txt-red">Incapacidade/ <br>Invalidez</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>

        <a href="#" class="areas-card flex-center area-card1">
          <h3>Revisão de benefícios do
            <br><span class="txt-red">INSS</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>

        <a href="#" class="areas-card flex-center area-card1">
          <h3>Pensão por
            <br><span class="txt-red">Morte</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>

        <a href="#" class="areas-card flex-center area-card1">
          <h3>Concessão de Benefício
            <br><span class="txt-red">Internacional</span>
          </h3>
          <p class="areas-seta">➞</p>
        </a>

        <a href="#" class="areas-card flex-center area-card1">
          <h3><span class="txt-red">Suspensão</span> da cobrança de <span class="txt-red">25%</span> do brasileiro no exterior</h3>
          <p class="areas-seta">➞</p>
        </a>

        <a href="#" class="areas-card flex-center area-card1">
          <h3>Outros serviços Previdenciários</h3>
          <p class="areas-seta">➞</p>
        </a>
      </div>
    </section>

    <!-- BLOG -->
    <section id="home-blog" class="home-blog container secao flex-center">
      <div class="secao-tit">
        <p>Posts Relacionados</p>
        <h2>Aposentadorias<span class="txt-red"> Gerais</span></h2>
      </div>
      <div class="grid-4">
        <a href="#" class="blog-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post1.png" alt="Postagem 1">
          <p>Visto Mercosul no Brasil: isenções, regras, residência e mais.</p>
        </a>
        <a href="#" class="blog-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post2.png" alt="Postagem 2">
          <p>Aposentados do INSS: direitos, atrasados e revisão de benefício.</p>
        </a>
        <a href="#" class="blog-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post3.png" alt="Postagem 3">
          <p>Aposentadoria Rural hoje: quais os requisitos do INSS?</p>
        </a>
        <a href="#" class="blog-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/post4.png" alt="Postagem 4">
          <p>Revisão do Artigo 29: aposentadoria por invalidez e auxílio…</p>
        </a>
      </div>
      <a href="#" class="btn btn-pri">Ver mais posts</a>
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