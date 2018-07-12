<?php get_header(); ?>


<!-- Blog Section with Sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>
			</div>
			<!-- /Blog Area -->	
<!-- /Blog Area -->			
			<!--Sidebar Area-->
			  <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
				<?php get_sidebar(); ?>
			  </div>
			  </div>
			<!--Sidebar Area-->
<!--<?php get_front_page_template();?>
-->
<?php get_footer(); ?>
