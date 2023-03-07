<!-- MODAL MENU -->
<nav class="header-modal" data-modal-menu="container">
	<?php
		$header = get_field('header');
			if( $header ): ?>
      <button class="hamburguer-fechar" data-modal-menu="fechar"></button>
      <ul>
        <li><a href="<?php echo $header['botao-1-link']; ?>"><?php echo $header['botao-1-texto']; ?></a></li>
		    <li><a href="<?php echo $header['botao-2-link']; ?>"><?php echo $header['botao-2-texto']; ?></a></li>
        <li><a href="<?php echo $header['botao-3-texto']; ?>"><?php echo $header['botao-3-texto']; ?></a></li>
        <li><a href="<?php echo $header['botao-4-link']; ?>"><?php echo $header['botao-4-texto']; ?></a></li>
        <li><a href="<?php echo $header['botao-5-link']; ?>"><?php echo $header['botao-5-texto']; ?></a></li>
        <li><a href="<?php echo $header['botao-6-link']; ?>"><?php echo $header['botao-6-texto']; ?></a></li>
        <li><a href="<?php echo $header['botao-7-link']; ?>"><?php echo $header['botao-7-texto']; ?></a></li>
        <li>
          <ul class="header-modal-sociais">
            <li><a target="_blank" href="https://www.facebook.com/koetzadvocacia/"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="Ícone do Facebook da Koetz Advocacia"></a></li>
            <li><a target="_blank" href="https://www.instagram.com/koetzadv/"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/instagram.svg" alt="Ícone do Instagram da Koetz Advocacia"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/10021439/admin/"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/linkedin.svg" alt="Ícone do Linkedin da Koetz Advocacia"></a></li>
            <li><a target="_blank" href="#"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/tiktok.svg" alt="Ícone do Tiktok da Koetz Advocacia"></a></li>
            <li><a target="_blank" href="https://www.youtube.com/@KoetzAdvocacia"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/youtube.svg" alt="Ícone do Youtube da Koetz Advocacia"></a></li>
          </ul>
        </li>
      </ul>
	<?php endif; ?>
</nav>

<!-- FOOTER -->
<footer id="footer" class="container">
	<?php
		$footer = get_field('footer');
			if( $footer ): ?>
    <div class="grid-4">
      <div class="footer-logo">
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/logo-koetz.svg" alt="Logotipo Koetz Advocacia">
        <p><?php echo $footer['texto-descricao']; ?></p>
      </div>

      <div class="footer-menu">
        <p class="footer-tit">Menu</p>
        <nav>
          <ul>
            <li><a href="<?php echo $footer['menu-link-1']; ?>"><?php echo $footer['menu-texto-1']; ?></a></li>
			      <li><a href="<?php echo $footer['menu-link-2']; ?>"><?php echo $footer['menu-texto-2']; ?></a></li>
            <li><a href="<?php echo $footer['menu-link-3']; ?>"><?php echo $footer['menu-texto-3']; ?></a></li>
            <li><a href="<?php echo $footer['menu-link-4']; ?>"><?php echo $footer['menu-texto-4']; ?></a></li>
            <li><a href="<?php echo $footer['menu-link-5']; ?>"><?php echo $footer['menu-texto-5']; ?></a></li>
            <li><a href="<?php echo $footer['menu-link-6']; ?>"><?php echo $footer['menu-texto-6']; ?></a></li>
            <li><a href="<?php echo $footer['menu-link-7']; ?>"><?php echo $footer['menu-texto-7']; ?></a></li>
            <li><a href="<?php echo $footer['menu-link-8']; ?>"><?php echo $footer['menu-texto-8']; ?></a></li>
            <li><a href="<?php echo $footer['menu-link-9']; ?>"><?php echo $footer['menu-texto-9']; ?></a></li>
          </ul>
        </nav>
      </div>

      <div class="footer-consultas">
        <p class="footer-tit">Consultas Jurídicas</p>
        <nav>
          <ul>
            <li><a href="<?php echo $footer['areas-link-1']; ?>"><?php echo $footer['areas-texto-1']; ?></a></li>
            <li><a href="<?php echo $footer['areas-link-2']; ?>"><?php echo $footer['areas-texto-2']; ?></a></li>
			      <li><a href="<?php echo $footer['areas-link-3']; ?>"><?php echo $footer['areas-texto-3']; ?></a></li>
            <li><a href="<?php echo $footer['areas-link-4']; ?>"><?php echo $footer['areas-texto-4']; ?></a></li>
            <li><a href="<?php echo $footer['areas-link-5']; ?>"><?php echo $footer['areas-texto-5']; ?></a></li>
            <li><a href="<?php echo $footer['areas-link-6']; ?>"><?php echo $footer['areas-texto-6']; ?></a></li>
            <li><a href="<?php echo $footer['areas-link-7']; ?>"><?php echo $footer['areas-texto-7']; ?></a></li>
            <li><a href="<?php echo $footer['areas-link-8']; ?>"><?php echo $footer['areas-texto-8']; ?></a></li>
			<li><a href="<?php echo $footer['areas-link-9']; ?>"><?php echo $footer['areas-texto-9']; ?></a></li>
            <li><a href="<?php echo $footer['areas-link-10']; ?>"><?php echo $footer['areas-texto-10']; ?></a></li>
          </ul>
        </nav>
      </div>

      <div class="footer-sociais">
        <p class="footer-tit">Siga-nos nas redes sociais</p>
        <nav>
          <ul>
            <li><a target="_blank" href="https://www.facebook.com/koetzadvocacia/"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook-dark.svg" alt="Ícone do Facebook da Koetz Advocacia"></a></li>
            <li><a target="_blank" href="https://www.instagram.com/koetzadv/"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/instagram-dark.svg" alt="Ícone do Instagram da Koetz Advocacia"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/10021439/admin/"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/linkedin-dark.svg" alt="Ícone do Linkedin da Koetz Advocacia"></a></li>
            <li><a target="_blank" href="#"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/tiktok-dark.svg" alt="Ícone do Tiktok da Koetz Advocacia"></a></li>
            <li><a target="_blank" href="https://www.youtube.com/@KoetzAdvocacia"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/youtube-dark.svg" alt="Ícone do Youtube da Koetz Advocacia"></a></li>
          </ul>
        </nav>
        <p class="footer-tit">Proteção de dados</p>
        <p>DPO (Encarregado de Proteção de
          Dados): Eduardo Koetz -
          eduardo@koetzadvocacia.com.br</p>

      </div>
    </div>
    <div class="footer-dados">
      <p>© 2023 Koetz Advocacia. </p>
      <p>Todos os Direitos Reservados</p>
    </div>
	<?php endif; ?>
  </footer>

  <!-- MEUS SCRIPTS -->
  <script async type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>

  <!-- FOOTER Wordpress -->
  <?php wp_footer(); ?>
</body>

</html>
