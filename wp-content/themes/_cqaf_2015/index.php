<?php get_header(); ?>

	<?php
		query_posts('posts_per_page=3');
			while(have_posts()) : the_post(); ?>
			
			<div class="jumbotron">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_excert(); ?></p>
			
			</div>
			
			
	<?php endwhile; wp_reset_query(); ?>	
	
	<div class="panel panel-default panel-body">
	
		<div class="row">
		
			<div class="col-md-2">
			
				<ul class="nav nav-pills nav-stacked">
					<?phpwp_list_categories('orderby=name') ?> 
				
				
				</ul>
			
			</div>
			
			<div class="col-md-10">
			
			</div>
		
		</div>
		
	</div>	



<?php get_footer(); ?>