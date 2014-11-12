<?php get_header(); ?>

<div class="row">
    <div class="col-md-8, col-sm-8, col-xs-6">


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	    
		<p><em><?php the_time('l, F jS, Y'); ?></em></p>

		<?php the_content(); ?>

	    <hr>
	    
	    <?php comments_template(); ?>

		<?php endwhile; else: ?>
		  <p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>
	</div>

	<div class="col-md-4, col-sm-4, col-xs-6">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>