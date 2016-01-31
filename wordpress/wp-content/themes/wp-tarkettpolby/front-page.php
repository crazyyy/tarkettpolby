<?php /* Template Name: Home Page */ get_header(); ?>

  <div class="col-md-9">
    <div class="row">

      <?php if( have_rows('slider') ): ?>
        <article class="article-slider">
          <div class="owl-carousel">

            <?php while( have_rows('slider') ): the_row();

              // vars
              $image = get_sub_field('image');
              $content = get_sub_field('content');
              $link = get_sub_field('link');

            ?>

              <div class="item">
                <?php if( $link ): ?>
                  <a href="<?php echo $link; ?>">
                <?php endif; ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <P><?php echo $content; ?></P>
                <?php if( $link ): ?>
                  </a>
                <?php endif; ?>
              </div><!-- item -->

            <?php endwhile; ?>

          </div><!-- owl-carousel -->
        </article><!-- /.article-slider -->
      <?php endif; ?>

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
<?php the_content(); ?>
      </article><!-- /.article-content -->

    </div><!-- /.row -->
  </div><!-- col-md-9" -->

<?php get_footer(); ?>
