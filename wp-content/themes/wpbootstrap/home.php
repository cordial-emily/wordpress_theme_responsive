<?php get_header(); ?>

<div class="row">
    <div class="col-xs-8">

    	<h1>News</h1>

    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    	<div class="item">
				
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			    
				<p><em><?php the_time('l, F jS, Y'); ?></em></p>
			</div>
			
		<?php endwhile; else: ?>
		    
			<div class="item">
				
				  <p><?php _e('Sorry, there are no posts.'); ?></p>
				
			</div>

		<?php endif; ?>

	</div>

	<div class="col-xs-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>