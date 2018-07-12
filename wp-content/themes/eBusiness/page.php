<?php get_header();?>        

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
              <div class="single-blog">
                <div class="single-blog-img">
              
       <!-- call content.php -->
       			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>
										
                </div>
                
                
               <!-- <span>
										<a href="blog-details.html" class="ready-btn">Read more</a>
									</span>
              </div>
            </div>
            <!-- End single blog 
           
            
           
           
            <div class="blog-pagination">
              <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>   

  
<?php get_footer(); ?>