<?php get_header(); ?>


<div class="span8" style="float:left; margin-left:0;">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
<div class="span4" style="float:right">
<?php get_sidebar(); ?>	
  </div>



<?php get_footer(); ?>