<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="entry">
		  <h1><?php the_title(); ?></h1>  

		  <div class="entry-body">
		  <?php the_content(); ?>
		  </div>
	</div>

	<?php endwhile; else: ?>
	  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

</div>

<?php get_footer(); ?>