<?php get_header(); ?>

<div class="row">
    <div class="col-md-8, col-sm-8, col-xs-6">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <hr>
	    <?php the_content(); ?>

		<?php endwhile; else: ?>
		  <p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>
	</div>

	<div class="col-md-4, col-sm-4, col-xs-6">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>