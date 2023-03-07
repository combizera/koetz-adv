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

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124271614-1"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124271614-1');
	gtag('config', 'AW-458339390');
</script>

<!-- Google Tag Manager -->
<script async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5XB49D4');</script>
<!-- End Google Tag Manager -->

<!-- Verificação de Domínio do Facebook -->
<meta name="facebook-domain-verification" content="7c7nr3aqjezyk5riqae2drywt9cyno" />
<!-- Verificação de Domínio do Facebook -->

<!-- Facebook Pixel Code -->
<script async>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2575858622719529');
  fbq('track', 'PageView');
</script>
<!-- End Facebook Pixel Code -->                                                                                    			<style>
			#related_posts_thumbnails li{
				border-right: 1px solid #ededed;
				background-color: #ffffff			}
			#related_posts_thumbnails li:hover{
				background-color: #efefef;
			}
			.relpost_content{
				font-size:	22px;
				color: 		#333333;
			}
			.relpost-block-single{
				background-color: #ffffff;
				border-right: 1px solid  #ededed;
				border-left: 1px solid  #ededed;
				margin-right: -1px;
			}
			.relpost-block-single:hover{
				background-color: #efefef;
			}
		</style>


  <!-- HEADER WORDPRESS -->
  <?php wp_head(); ?>
</head>

<!-- BODY -->

<body>

  <!-- HEADER -->
  <header id="header" class="container">
   <!-- <div class="lang">
      <button class="lang-active">PT</button>
      <button>EN</button>
      <button>ES</button>
    </div> -->
    <div class="header-main">
      <div class="header-logo">
        <a href="/koetz-adv/home/">
          <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/logo-koetz.svg" alt="Logotipo Koetz Advocacia"></a>
      </div>

      <div class="header-icones">
        <!-- <a href="#"></a><img loading="lazy" class="header-seta" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/pesquisar.png" alt="Ícone de Pesquisa"> -->
        <button class="hamburguer" data-modal-menu="abrir"></button>
      </div>
    </div>
  </header>
