<?php get_header(); ?>
  <div class="col-md-9">
    <div class="row">

      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('article-content article-content-bg'); ?>>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <h1 class="page-title inner-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <?php the_tags( __( 'Tags: ', 'wpeasy' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
          <p><?php _e( 'Categorised in: ', 'wpeasy' ); the_category(', '); // Separated by commas ?></p>
          <?php edit_post_link(); ?>
        <?php endwhile; else: // If 404 page error ?>
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        <?php endif; ?>

      </article><!-- /.article-content -->
    </div><!-- /.row -->
  </div><!-- col-md-9" -->
<?php get_footer(); ?>
