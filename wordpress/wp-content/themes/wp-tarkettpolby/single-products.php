<?php get_header(); ?>
  <div class="col-md-9">
    <div class="row">

      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('article-content article-content-bg'); ?>>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <h1 class="page-title inner-title"><?php the_title(); ?></h1>

          <?php the_content(); ?>

<?php the_field('product_type'); ?>
<hr>
<?php if( have_rows('specification_carpet') ): ?>

  <ul class="slides">

  <?php while( have_rows('specification_carpet') ): the_row();

    // vars
    $collection_name = get_sub_field('collection_name');
    $manufacturer_country = get_sub_field('manufacturer_country');
    $pile_height = get_sub_field('pile_height');
    $composition_of_pile = get_sub_field('composition_of_pile');
    $composition_basics = get_sub_field('composition_basics');
    $density_of_the_mat = get_sub_field('density_of_the_mat');
    $carpet_weight = get_sub_field('carpet_weight');
    $colour_fastness = get_sub_field('colour_fastness');
    $guarantee_period = get_sub_field('guarantee_period');

    ?>

    <li class="slide">Название коллекции  |||  <?php echo $collection_name; ?>  </li>
     <li class="slide"> Страна-производитель     |||  <?php echo $manufacturer_country; ?>  </li>
<li class="slide">Высота ворса   |||  <?php echo $pile_height; ?>  </li>
      <li class="slide">Состав ворса   |||    <?php echo $composition_of_pile; ?> </li>
      <li class="slide">Состав основы     |||   <?php echo $composition_basics; ?>  </li>
         <li class="slide">Плотность ковра   |||   <?php echo $density_of_the_mat; ?>  </li>
       <li class="slide">Вес ковра   |||  <?php echo $carpet_weight; ?> </li>
       <li class="slide">Цветоустойчивость   |||   <?php echo $colour_fastness; ?>  </li>
      <li class="slide">Гарантийный срок    |||   <?php echo $guarantee_period; ?> </li>


  <?php endwhile; ?>

  </ul>

<?php endif; ?>






<hr>
<?php if( have_rows('specification_carpeting') ): ?>

  <ul class="slides">

  <?php while( have_rows('specification_carpeting') ): the_row();

    // vars
    $the_manufacturer = get_sub_field('the_manufacturer');
    $manufacturer_country = get_sub_field('manufacturer_country');
    $collection_name = get_sub_field('collection_name');
    $structure = get_sub_field('structure');
    $moisture = get_sub_field('moisture');
    $wear_resistance = get_sub_field('wear_resistance');
    $the_basis = get_sub_field('the_basis');
    $composition = get_sub_field('composition');
    $pile_weight = get_sub_field('pile_weight');
    $thickness_coating = get_sub_field('thickness_coating');
    $the_pile_height = get_sub_field('the_pile_height');
    $roll_width = get_sub_field('roll_width');
    $roll_length = get_sub_field('roll_length');
    $life_time = get_sub_field('life_time');
    $weight_1_sqm = get_sub_field('weight_1_sqm');

    ?>

    <li class="slide">Компания производитель  |||  <?php echo $the_manufacturer; ?>  </li>
     <li class="slide">Страна-производитель     |||  <?php echo $manufacturer_country; ?>  </li>
<li class="slide">Название коллекции   |||  <?php echo $collection_name; ?>  </li>
      <li class="slide">Структура  |||    <?php echo $structure; ?> </li>
      <li class="slide">Влагостойкость     |||   <?php echo $moisture; ?>  </li>
         <li class="slide">Износостойкость  |||   <?php echo $wear_resistance; ?>  </li>
       <li class="slide">Основа   |||  <?php echo $the_basis; ?> </li>
       <li class="slide">Состав  |||   <?php echo $composition; ?>  </li>
      <li class="slide">Вес ворса, г/м2    |||   <?php echo $pile_weight; ?> </li>
      <li class="slide">Толщина покрытия, мм    |||   <?php echo $thickness_coating; ?> </li>
      <li class="slide">Высота ворса, мм   |||   <?php echo $the_pile_height; ?> </li>
      <li class="slide">Ширина рулона, м    |||   <?php echo $roll_width; ?> </li>
      <li class="slide">Длина рулона, м    |||   <?php echo $roll_length; ?> </li>
      <li class="slide">Срок службы   |||   <?php echo $life_time; ?> </li>
      <li class="slide">Вес 1 кв.м.   |||   <?php echo $weight_1_sqm; ?> </li>


  <?php endwhile; ?>

  </ul>

<?php endif; ?>






<hr>
<?php if( have_rows('specification_laminate') ): ?>

  <ul class="slides">

  <?php while( have_rows('specification_laminate') ): the_row();

    // vars
    $durability = get_sub_field('durability');
    $manufacturer = get_sub_field('manufacturer');
    $manufacturer_country = get_sub_field('manufacturer_country');
    $collection_name = get_sub_field('collection_name');
    $vendor_code = get_sub_field('vendor_code');
    $the_presence_of_chamfer = get_sub_field('the_presence_of_chamfer');
    $locking_system = get_sub_field('locking_system');
    $thickness = get_sub_field('thickness');
    $length = get_sub_field('length');
    $width = get_sub_field('width');
    $the_area_of_package = get_sub_field('the_area_of_package');
    $the_area_of_the_board = get_sub_field('the_area_of_the_board');
    $the_number_in_the_package = get_sub_field('the_number_in_the_package');
    $weight_of_1_sq_kg = get_sub_field('weight_of_1_sq_kg');
    $class_durability = get_sub_field('class_durability');
    $load_class = get_sub_field('load_class');
    $service_life_years = get_sub_field('service_life_years');
    $surface_treatment = get_sub_field('surface_treatment');
    $underfloor_heating = get_sub_field('underfloor_heating');

    ?>

    <li class="slide">Износоустойчивость  |||  <?php echo $durability; ?>  </li>
     <li class="slide">Компания производитель     |||  <?php echo $manufacturer; ?>  </li>
     <li class="slide">Страна ввоза      |||  <?php echo $manufacturer_country; ?>  </li>
     <li class="slide">Название коллекции      |||  <?php echo $collection_name; ?>  </li>
     <li class="slide">Артикул     |||  <?php echo $vendor_code; ?>  </li>
     <li class="slide">Наличие фаски       |||  <?php echo $the_presence_of_chamfer; ?>  </li>
     <li class="slide">Замковая система      |||  <?php echo $locking_system; ?>  </li>
     <li class="slide">Толщина покрытия общая, мм      |||  <?php echo $thickness; ?>  </li>
     <li class="slide">Длина, мм.      |||  <?php echo $length; ?>  </li>
     <li class="slide">Ширина, мм.       |||  <?php echo $width; ?>  </li>
     <li class="slide">Площадь упаковки[м2]      |||  <?php echo $the_area_of_package; ?>  </li>
     <li class="slide">Площадь одной доски       |||  <?php echo $the_area_of_the_board; ?>  </li>
     <li class="slide">Количество в упаковке, шт.      |||  <?php echo $the_number_in_the_package; ?>  </li>
     <li class="slide">Вес 1 кв.м., кг.      |||  <?php echo $weight_of_1_sq_kg; ?>  </li>
     <li class="slide">Класс истираемости      |||  <?php echo $class_durability; ?>  </li>
     <li class="slide">Класс нагрузки      |||  <?php echo $load_class; ?>  </li>
     <li class="slide">Срок службы, лет      |||  <?php echo $service_life_years; ?>  </li>
     <li class="slide">Обработка поверхности       |||  <?php echo $surface_treatment; ?>  </li>
     <li class="slide">Использование для теплых полов      |||  <?php echo $underfloor_heating; ?>  </li>



  <?php endwhile; ?>

  </ul>

<?php endif; ?>







<hr>
price <?php the_field('price'); ?>
<hr>
<?php

$images = get_field('gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<hr>


 <?php edit_post_link(); ?>

        <?php endwhile; else: // If 404 page error ?>
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        <?php endif; ?>

      </article><!-- /.article-content -->
    </div><!-- /.row -->
  </div><!-- col-md-9" -->
<?php get_footer(); ?>
