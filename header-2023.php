<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Descrição do site -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- Estilos -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <!-- Tipografia -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
  <!-- TÍTULO NOVO -->
  <title><?php bloginfo('name'); ?></title>

  <!-- HEADER WORDPRESS -->
  <?php wp_head(); ?>
</head>

<!-- BODY -->

<body>

  <!-- HEADER -->
  <header id="header" class="container">
    <div class="lang">
      <button class="lang-active">PT</button>
      <button>EN</button>
      <button>ES</button>
    </div>
    <div class="header-main">
      <div class="header-logo">
        <a href="/koetz-adv/home/">
          <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/logo-koetz.svg" alt="Logotipo Koetz Advocacia"></a>
      </div>

      <div class="header-icones">
        <a href="#"></a><img loading="lazy" class="header-seta" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/pesquisar.png" alt="Ícone de Pesquisa">
        <button class="hamburguer" data-modal-menu="abrir"></button>
      </div>
    </div>
  </header>
