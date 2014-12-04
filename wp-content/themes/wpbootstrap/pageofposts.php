<?php
/* Template Name: Page Of Posts */
get_header(); ?>

      <div class="jumbotron">
        <img class="img-responsive" src="/wp-admin/images/h-images/banner_a.0.png" alt="profile pic" width="100%" style="margin-left:auto; margin-right: auto;">
     
      </div>



      <div class="row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-md-4">

                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p><em><?php the_time('l, F jS, Y'); ?></em></p>
              </div>
 
          <?php endwhile; else: ?>

              <div class="col-md-4">
        
                  <p><?php _e('Sorry, there are no posts.'); ?></p>

              </div>

          <?php endif; ?>
      </div>

<?php get_footer(); ?>




