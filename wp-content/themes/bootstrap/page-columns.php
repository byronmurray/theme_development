<?php
/*
  Template Name: 2 Columns
*/

?>
<?php get_header(); ?>
  
  <?php get_hero_image() ?>
  
  <div class="container flex page-container">
     
      <div class="columns-2">
		
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          	<?php the_content(); ?>

          <?php endwhile; endif; ?>

      </div>

      <div class="columns-2">
     
        <?php display_meta_box(); ?>
 
  	  </div>

  </div>

<?php get_footer(); ?>

