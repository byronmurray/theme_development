<?php get_header(); ?>

<?php get_hero_image() ?>

<div class="container flex page-container">   
    
    <div class="main-content">


      <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
         
        $args = array(
           'posts_per_page' => 6,
           'paged' => $paged
        );
         
        $custom_query = new WP_Query( $args );
         
        if ($custom_query->have_posts() ) : while($custom_query->have_posts()) : $custom_query->the_post(); ?>

          <article class="post">
            <div class=" text-center">

              <?php the_category( ', ' ); ?>
              <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
              <p><em><?php echo the_time('l, F jS, Y');?></em></p>

            </div>
            

            <?php the_post_thumbnail('blog_featured' ); ?>            

            <?php the_excerpt(); ?>

            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>

          </article>
       
        <?php endwhile; ?>
      <!-- End of the main loop -->

      <!-- Add the pagination functions here. -->

      

      <?php if (function_exists("pagination")) { ?>
        <div class="text-center">
          <?php pagination($custom_query->max_num_pages); ?>
        </div>
      <?php } ?>

      <?php else : ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

    </div>

    <div class="sidebar">
    
      <?php get_sidebar( 'blog' ); ?>

    </div>


</div>

<?php get_footer(); ?>