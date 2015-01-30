<?php get_header(); ?>

	<?php
		query_posts('posts_per_page=1');
			while(have_posts()) : the_post(); ?>
			
			<div class="jumbotron">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_excerpt(); ?></p>
			
			</div>
			
	<?php endwhile; wp_reset_query(); ?>	
	
	<div class="panel panel-default panel-body">
	
		<div class="row">
		
			<div class="col-md-2">
			
				<ul class="nav nav-pills nav-stacked">
				
					<?php wp_list_categories('orderby=name&title_li=') ?> 
				
				</ul>
			
			</div><!--/col-md-2 -->
			
			<div class="col-md-10">
			
				<?php while(have_posts()) : the_post(); ?>
				
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php wp_get_attachment_image_src( $attachment_id, $size, $icon ); ?> 
					<p><?php the_excerpt(); ?></p>
					<div class="text-muted"><p>Posted by <?php the_author(); ?> on <?php the_time('F jS, M'); ?></p></div>
					
				<?php endwhile; wp_reset_query(); ?>	
			
			</div><!--/col-md-10 -->
		
		</div><!--/row -->
		
	</div>	<!--/panel -->




<?php get_footer(); ?>