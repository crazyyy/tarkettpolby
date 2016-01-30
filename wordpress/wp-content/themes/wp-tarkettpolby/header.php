<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
    <!-- meta -->

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
    <![endif]-->
    <!-- css + javascript -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper container">
  <header role="banner">
    <div class="inner row">

      <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
          <a href="<?php echo home_url(); ?>">
            <?php  } ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
          </a>
        <?php } ?>
      </div><!-- /logo -->

      <div class="phone-block">
        <a href="tel:+375173411942"><i class="fa fa-phone"></i>+375 17 341 19 42;</a>
        <a href="tel:+375173417544"><i class="fa fa-phone"></i>+375 17 341 75 44;</a>
        <a href="tel:+375447898105"><i class="fa fa-phone"></i>+375 44 789 81 05;</a>
        <a href="tel:+375297044776"><i class="fa fa-phone"></i>+375 29 704 47 76;</a>
        <a href="mailto:cck_minsk@mail.ru"><i class="fa fa-envelope-o"></i>cck_minsk@mail.ru</a>
      </div><!-- /.phone-block -->

      <nav class="nav" role="navigation">
        <?php wpeHeadNav(); ?>
      </nav><!-- /nav -->

      <span class="hamburger"></span>

      <form action="http://yandex.ru/sitesearch" method="get" target="_self" class="headsearch">
        <input type="hidden" name="searchid" value="2076276">
        <input type="hidden" name="l10n" value="ru">
        <input type="hidden" name="reqenc" value="">
        <input type="text" name="text" placeholder="Поиск...">
        <button><i class="fa fa-search"></i></button>
      </form>

    </div><!-- /.inner -->
  </header><!-- /header -->

  <section role="main">
    <div class="inner row">

    <?php get_sidebar(); ?>
