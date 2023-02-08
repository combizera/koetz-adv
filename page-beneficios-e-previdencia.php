<?php 
// Template name: Benefícios e Previdência
get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <?php include(TEMPLATEPATH . "/assets/inc/hero.php"); ?> 

    <!-- BENEFÍCIOS E PREVIDÊNCIAS -->
    <section class="beneficios container">
      
    <!-- MAPPING -->
    <?php include(TEMPLATEPATH . "/assets/inc/mapping.php"); ?> 

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

    <!-- CARDS BLOG -->
    <?php include(TEMPLATEPATH . "/assets/inc/cards-blog.php"); ?> 

    <!-- CTA EMAIL -->
    <?php include(TEMPLATEPATH . "/assets/inc/cta-email.php"); ?> 
  </main>

  <?php endwhile; else: endif; ?>

<!-- Para pegar o Footer -->
<?php get_footer(); ?>