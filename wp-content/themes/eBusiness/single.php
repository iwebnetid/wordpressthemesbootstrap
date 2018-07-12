<?php get_header(); ?>

  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
      <?php get_sidebar();?>
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
      
       <!-- call content-single.php -->
      		<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
				endwhile; endif; 
			?>


                  </div>
                </div>
              </article>
              <div class="clear"></div>
              		  
              		  
              <div class="single-post-comments">
                <div class="comments-area">
                  <div class="comments-heading">
                <?php	if ( comments_open() || get_comments_number() ) :
	  				comments_template();
				endif;?>
                   
                  </div>
                 
                </div>
                
              </div>
              <!-- single-blog end -->
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




<?php get_footer(); ?>