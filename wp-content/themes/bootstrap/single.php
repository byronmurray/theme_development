<?php get_header(); ?>

  <?php get_hero_image() ?>
  
  <div class="page-header">

  	<div class="container"> 
  		<!-- <h1>News</h1> -->
	   </div>

  </div>

  <div class="container">   
    <div class="row">
      
      <article class="col-md-9 post">
        <div class=" text-center">

          <?php the_category( ', ' ); ?>
          <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <p><em><?php echo the_time('l, F jS, Y');?></em></p>

        </div>
        

        <?php the_post_thumbnail('blog_featured' ); ?>            

        <?php the_content( ); ?>

        <hr>

      </article>

      <div class="col-md-3 sidebar">
      
      	<?php get_sidebar('blog'); ?>

  	   </div>

    </div>

  </div>

<?php get_footer(); ?>