<?php get_header(); ?>

<div class="row">
    <div class="col-md-8, col-sm-8, col-xs-6">

    	<h1>News</h1>

    	<div class="item">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		    
			<p><em><?php the_time('l, F jS, Y'); ?></em></p>
		</div>
		    
		    
		<div class="item">
			<?php endwhile; else: ?>
			  <p><?php _e('Sorry, there are no posts.'); ?></p>
			<?php endif; ?>
		</div>
	</div>

	<div class="col-md-4, col-sm-4, col-xs-6">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>