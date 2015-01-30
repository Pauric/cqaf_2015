<?php get_header(); ?>

<div class="container">

      <!--  Carousel -->
      <!--  consult Bootstrap docs at 
            http://twitter.github.com/bootstrap/javascript.html#carousel -->
      <div id="this-carousel-id" class="carousel slide">
        <div class="carousel-inner">
          
          <div class="item active">
            <a href="#">  <img src="http://bff.dev/wp-content/uploads/2013/03/ss1.jpg" alt="Slideshow" />
            </a>
          </div>
          
          <div class="item">
            <a href="#">
              <img src="http://bff.dev/wp-content/uploads/2013/03/ss2.jpg" alt="Slideshow" />
            </a>
          </div>
          
          <div class="item">
            <a href="#">
              <img src="http://bff.dev/wp-content/uploads/2013/03/ss3.jpg" alt="Slideshow" />
            </a>
          </div>
          
          <div class="item">
            <a href="#">
              <img src="http://bff.dev/wp-content/uploads/2013/03/ss4.jpg" alt="Slideshow" />
            </a>
          </div>
          
          <div class="item">
            <a href="#">
              <img src="http://bff.dev/wp-content/uploads/2013/03/ss5.jpg" alt="Slideshow" />
            </a>
          </div>
          
          <div class="item">
            <a href="#">
              <img src="http://bff.dev/wp-content/uploads/2013/03/ss6.jpg" alt="Slideshow" />
            </a>
          </div>
          
          <div class="item">
            <a href="#">
              <img src="http://bff.dev/wp-content/uploads/2013/03/ss7.jpg" alt="Slideshow" />
            </a>
          </div>
          
          <div class="item">
            <a href="#">
              <img src="http://bff.dev/wp-content/uploads/2013/03/ss8.jpg" alt="Slideshow" />
            </a>
          </div>
        </div><!-- .carousel-inner -->
       
        <!--  next and previous controls here
              href values must reference the id for this carousel -->
          <a class="carousel-control left" href="#this-carousel-id" data-slide="prev"><img src="http://bff.dev/wp-content/themes/wpbootstrap/bff/img/left2.png" alt="Previous"></a>
          <a class="carousel-control right" href="#this-carousel-id" data-slide="next"><img src="http://bff.dev/wp-content/themes/wpbootstrap/bff/img/right2.png" alt="Next"></a>
      </div><!-- .carousel -->
      <!-- end carousel -->
       
<div class="span8" style="float:left; margin-left:0;">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
</div>
<div class="span4" style="float:right">

    <?php get_sidebar(); ?>   

  </div>

<?php get_footer(); ?>