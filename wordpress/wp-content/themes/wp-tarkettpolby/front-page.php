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
        <img src="img/logo.png" alt="" title="">
      </div><!-- /logo -->

      <div class="phone-block">
        <a href="tel:+375173411942"><i class="fa fa-phone"></i>+375 17 341 19 42;</a>
        <a href="tel:+375173417544"><i class="fa fa-phone"></i>+375 17 341 75 44;</a>
        <a href="tel:+375447898105"><i class="fa fa-phone"></i>+375 44 789 81 05;</a>
        <a href="tel:+375297044776"><i class="fa fa-phone"></i>+375 29 704 47 76;</a>
        <a href="mailto:cck_minsk@mail.ru"><i class="fa fa-envelope-o"></i>cck_minsk@mail.ru</a>
      </div><!-- /.phone-block -->

      <nav class="nav" role="navigation">
        <ul class="headnav">
          <li><a href="#">ГЛАВНАЯ</a></li>
          <li><a href="#">УСЛУГИ</a></li>
          <li><a href="#">КОНТАКТЫ</a></li>
          <li><a href="#">О НАС</a></li>
          <li><a href="#">Доставка</a></li>
          <li><a href="#">СТАТЬИ</a></li>
          <li><a href="#">НОВИНКА КОВРЫ</a></li>
        </ul>
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

      <aside class="sidebar col-md-3" role="complementary">
        <div class="row">
          <div class="widget widget-catalog col-md-12 col-xs-6 col-sm-6">
            <h6>КАТАЛОГ</h6>
            <ul>
              <li><a href="#">СЕТКА РАБИЦА</a></li>
              <li><a href="#">ЖИДКИЕ ОБОИ</a></li>
              <li><a href="#">КОВРОЛИН</a></li>
              <li><a href="#">КОВРЫ</a></li>
              <li><a href="#">ЛАМИНАТ</a></li>
              <li><a href="#">ЛИНОЛЕУМ</a></li>
              <li><a href="#">ГЕТЕРОГЕННОЕ ГОМОГЕННОЕ ПВХ ПОКРЫТИЯ</a></li>
              <li><a href="#">ПЛИНТУС</a></li>
              <li><a href="#">ПОДЛОЖКА</a></li>
              <li><a href="#">ПОРОГИ АЛЮМИНИЕВЫЕ</a></li>
              <li><a href="#">ОСБ ПЛИТЫ</a></li>
              <li><a href="#">МДФ ПАНЕЛИ</a></li>
              <li><a href="#">ПВХ ПАНЕЛИ</a></li>
              <li><a href="#">КЛЕЙ</a></li>
              <li><a href="#">ДВУХСТОРОННИЙ СКОТЧ</a></li>
            </ul>
          </div><!-- widget widget-catalog-->
          <div class="widget widget-news col-md-12 col-xs-6 col-sm-6">
            <h6>НОВОСТИ:</h6>
            <h3 class="title-red">СНИЖЕНИЕ ЦЕН НА КОВРОЛИН ЛИНОЛЕУМ И ЛАМИНАТ</h3>
            <h4 class="title-subtitle">ТЕПЕРЬ ЦЕНЫ ЕЩЕ НИЖЕ</h4>
            <ul>
              <li>
                <h3><a href="#">ЛАМИНАТ КРОНОШПАН FORTE 33 класс</a></h3>
                <span class="price-new">120 000</span> / m²
              </li>
              <li>
                <h3><a href="#">КОВРОЛИН АТЛАНТ</a></h3>
                <span class="price-new">94 000</span> / m²
              </li>
              <li>
                <h3><a href="#">КОВРОЛИН ГЛОБАЛ</a></h3>
                <span class="price-new">от 94 000</span> / m²
              </li>
              <li>
                <h3><a href="#">КОВРОЛИН ЛИДЕР</a></h3>
                <span class="price-new">130 000</span> / m²
              </li>
            </ul>
          </div><!-- /.widget widget-news -->
        </div>
      </aside><!-- /sidebar -->

      <div class="col-md-9">
        <div class="row">

          <article class="article-slider">
            <div class="owl-carousel">

              <div class="item">
                <a href="#">
                  <img src="img/slider/slider-1.jpg" alt="">
                  <p>Такой вид напольного покрытия как линолеум является одним из самых популярных и дешевых материалов. Его низкая и доступная цена являются для покупателя решающим фактором.</p>
                </a>
              </div><!-- item -->

              <div class="item">
                <a href="#">
                  <img src="img/slider/slider-2.jpg" alt="">
                  <p>Ковролин обладает высокой проходимостью и может выдержать даже экстремальные условия эксплуатации. Именно поэтому такое ковровое покрытие решают купить и постелить в офисных помещениях или на торговых площадях.</p>
                </a>
              </div><!-- item -->

              <div class="item">
                <a href="#">
                  <img src="img/slider/slider-3.jpg" alt="">
                  <p>Ламинат, как основа дизайна квартиры – это не просто современная тенденция, а хорошая традиция, основанная на грамотном выборе этого типа материала и его свойствах.</p>
                </a>
              </div><!-- item -->

            </div><!-- owl-carousel -->
          </article><!-- /.article-slider -->

          <article class="article-mosaic">
            <div class="row">

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-1.jpg" alt="">
                  <h5>ЛИНОЛЕУМ</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-2.jpg" alt="">
                  <h5>КОВРОЛИН</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-3.jpg" alt="">
                  <h5>КОВРЫ</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-4.jpg" alt="">
                  <h5>ЛАМИНАТ</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-5.jpg" alt="">
                  <h5>СЕТКА РАБИЦА</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-6.jpg" alt="">
                  <h5>Гетерогенные Гомогенные покрытия</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-7.jpg" alt="">
                  <h5>ПЛИНТУС</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-8.jpg" alt="">
                  <h5>ПОДЛОЖКА</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-9.jpg" alt="">
                  <h5>ПОРОГИ АЛЮМИНИВЫЕ</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-10.jpg" alt="">
                  <h5>ОСБ ПЛИТЫ</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-11.jpg" alt="">
                  <h5>МДФ ПАНЕЛИ</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-12.jpg" alt="">
                  <h5>ПВХ ПАНЕЛИ</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-13.jpg" alt="">
                  <h5>КЛЕЙ</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-14.jpg" alt="">
                  <h5>ДВУХСТОРОННИЙ СКОТЧ ДЛЯ ЛИНОЛЕУМА И КОВРОЛИНА</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

              <div class="col-md-4 article-mosaic-container col-xs-12 col-sm-6">
                <a href="#">
                  <img src="img/mosaic-container/mosaic-container-15.jpg" alt="">
                  <h5>ЖИДКИЕ ОБОИ</h5>
                </a>
              </div><!-- /.col-md-4 article-mosaic-container col-xs-12 col-sm-6 -->

            </div>
          </article><!-- /.article-mosaic row -->

          <article class="article-content">
            <h1>Магазин-Салон лучших напольных покрытий</h1>
            <h6>Дорогие друзья!</h6>
            <p>Наш Магазин-Салон имеет честь предложить вам огромный выбор высококлассного напольного покрытия таких как Линолеум, Ламинат , Ковролин, Ковры от мировых компаний производителей.</p>
            <p>Ознакомится с образцами можно на офисе компании «ССК» в городе Минске на улице Ташкентская 7-46, где покупатели могут воочию оценить качества покрытия и подобрать все сопутствующие товары, плинтус в цвет, пороги, клей, скотч, а также заказать укладку, доставку, в подходящее для вас время.</p>
            <p>Сроки доставки меньшьше суток, если покупатель до 13 часов сделал заказ, то доставка может быть в этот же день ближе к вечеру.</p>
            <h2>Компании производители и коллекции Линолеума</h2>
            <ul>
              <li>Линолеум Таркетт Россия коллекции Идиллия Нова, Дискавери, Мода, Европа, Магия;</li>
              <li>Линолеум Таркетт Сербия коллекции Премиум, Форс, Эволюшн;</li>
              <li>Линолеум бренда Синтерос (на базе Таркетта) коллекции Комфорт, Супер С;</li>
              <li>Линолеум Комитекс Лин коллекции Парма, Печора;</li>
              <li>Линолеум IVC коллекции Гринлайн;</li>
              <li>Линолеум Ютекс коллекции Стронг Плюс, Мегаполис, Император, Венус, Тенденс, Респект;</li>
              <li>Линолеум бренд Ideal (Россия, Бельгия) коллекции Ультра, Рекорд, Глори, Коттедж, Вояж;</li>
            </ul>
            <blockquote>Думаете, что выбор дешевого линолеума – непосильная задача? Вовсе нет! В нашем магазине в Минске можно Купить Линолеум, полностью соответствующее типу помещения, интенсивности эксплуатации и всем остальным важным факторам.</blockquote>
            <h2>Почему купить Линолеум лучше у нас?</h2>
            <ul>
              <li>Как Вы могли убедится у нас широчайший ассортиментный перечень коллекций, производителей и цветов линолеума;</li>
              <li>Сертифицированная продукция – вся продукция имеет сертификаты качества и гигиены, это наилучшее доказательство качества и безопасности;</li>
              <li>Высококвалифицированный персонал окажет помощь в подборе оптимального материала нужного размера для конкретного помещения;</li>
              <li>Четко организованная система Доставки, позволяет осуществить купленный у нас линолеум в кротчайшие сроки в удобное для вас время;</li>
              <li>Гибкая система скидок. Позвоните к нам и убедитесь сами мы перебьем все цены конкурентов;</li>
            </ul>
            <h2>Купить в Минске. Коммерческий Линолеум</h2>
            <ul>
              <li>Гетерогенный ПВХ линолеум Ютекс коллекция Премиум;</li>
              <li>Гомогенный ПВХ линолеум коллекция Primo Plus, Polyflor, Monolit;<br>
              В производственных помещениях, больницах, школах, в офисах с повышенной проходимостью либо на путях эвакуации людей, должно быть уложен и куплен линолеум с высокими пожарно-техническими характеристиками, например Гомогенное либо Гетерогенное, которые отвечают всем пожарным нормам такими как;</li>
              <li>Группа горючести Г2</li>
              <li>Группа распространения пламени РП1</li>
              <li>Группа дымообразующей способности Д2</li>
              <li>Группа воспламеняемости В2</li>
              <li>Группа токсичности горения продуктов Т2</li>
            </ul>
            <h2>Ковролин Бытовой и Коммерческий. Коллекции и Производители</h2>
            <ul>
              <li>Ковролин для офисных помещений Сербия коллекции Глобал, Меридиан, Лидер, Фаворит;</li>
              <li>Ковролин для домашнего применения Украина коллекции Атлант, Фантом, Кио, Оникс, Драгон Сербия, Кредо, Оазис;</li>
              <li>Ковролин коммерческий Бельгия Самурай, Венеция;</li>
              <li>Ковровая плитка Лондон, Desso;</li>
            </ul>
            <blockquote>Теперь, для того чтобы купить в Минске ковролин по ценам импортера и дилера нет никакой необходимости в мучительном поиске и бесконечных телефонных звонках. В магазин-салоне Дом Напольных Покрытий вам всегда помогут подобрать нужный вам ковер с учетом Ваших пожеланий и финансовых возможностей. Поверьте – у нас есть из чего выбрать!</blockquote>
            <h2>Ковры. Самый большой ассортимент в Минске и низкие цены</h2>
            <ul>
              <li>Ковры с длинным ворсам коллекции SUPER SHAGGY, LOBBY, FUNKY, SPARK, SPECTRUM;</li>
            </ul>
            <blockquote>Долгие века Ковры могли позволить себе только самые состоятельные и знатные люди, ведь изготавливались они из дорогостоящих материалов и требовали длительного и кропотливого ручного труда. Сегодня купить ковер в Минске можно совсем недорого: смена ручного труда машинным и появление синтетических материалов сделали ковры доступными.</blockquote>
            <h3>Ламинат. Что можно купить в Минске</h3>
            <ul>
              <li>Ламинат Таркетт Германия коллекция WOODSTOCK, TORNADO, INFINITE, VINTAGE, LAMIN Art Lumino, SELECT;</li>
              <li>Ламинат Кроностар Россия коллекция Грюнхоф, SymBio 33 кл., Synchro Tec 33 кл. 4-х сторонняя фаска;</li>
              <li>Ламинат Кроношпан Беларусь коллекция Castello, Forte 33 кл.;</li>
            </ul>
          </article><!-- /.article-content -->

        </div><!-- /.row -->
      </div><!-- col-md-9" -->

    </div><!-- /.inner -->
  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container inner">
    <div class="row">
      <div class="footer-phone col-md-6 col-sm-6 col-xs-6">
        <a href="tel:+375447898105">+375 44 789 81 05;</a>
        <a href="tel:+375173417544">+375 17 341 75 44;</a>
        <a href="mailto:cck_minsk@mail.ru">cck_minsk@mail.ru</a>
      </div><!-- /.footer-phone -->
      <p class="adress col-md-6 col-sm-6 col-xs-6">г. Минск, ул. Ташкентская, д.7, ком 46<br>Самые низкие цены на ковролин ламинат линолеум и сопутствующие товары</p><!-- /adress -->
      <p class="copyright col-md-12 col-sm-12 col-xs-12">2011-2016 © Магазин-Салон Дом Напольных Покрытий</p>
    </div><!-- /.inner -->
  </div><!-- /.container -->
</footer><!-- /footer -->

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/owl.carousel.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>
