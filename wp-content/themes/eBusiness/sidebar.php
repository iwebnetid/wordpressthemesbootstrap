  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
      
      
              <!-- search option start -->
              <form action="#">
                <div class="search-option"><!-- <?php get_search_form(); ?>-->
                  <input type="text" placeholder="Search...">
     
                  <button class="button" type="submit">
                                            <i class="fa fa-search">
      </i>
                                        </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            
            <div class="single-blog-page">
              <!-- recent start --> 
              <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                  <!-- start single post -->
                  <!-- Define our WP Query Parameters-->
             
<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
				<!-- Start our WP Query-->
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    
                  <div class="recent-single-post">
                    <div class="post-img">
	<a href="<?php the_permalink() ?>">
   <?php	  
    if ( has_post_thumbnail() ) {
      echo  get_the_post_thumbnail();
    }
    ?></a>
                    </div>
            <div class="pst-content">  
       <p><a href="<?php the_permalink() ?>"><?php the_title(); ?><?php the_excerpt(__('(more…)')); ?></a></p>

            </div>

               </div>
<?php 
endwhile;
wp_reset_postdata();
?>   
             <!-- End single post -->
                  
                </div>
              </div>
              <!-- recent end -->
            </div>
           		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?> 	
            <div class="single-blog-page">
           <?php dynamic_sidebar( 'sidebar-1' ); ?>
           			<?php endif; ?>
              <div class="left-blog"> 


	
<!-- <?php	if ( is_active_sidebar( 'sidebar-1' ) ) : //check the sidebar if used.
dynamic_sidebar( 'sidebar-1' );  // show the sidebar.
endif;?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar- 1') ) : ?><?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php endif; ?>


                <h4>  </h4>
                <ul>	
                  <li>
                    
                  </li>
               
                </ul>-->
                
              </div>
            </div> 
            	  
            	<div class="single-blog-page"> 
              <div class="left-blog">
                <h4>About</h4>
                <ul>
                  <li>
                    <a href="#"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a>
                    <a href="#"><?php the_author_meta('user_email');?> </a>
                  </li>
                  <li>
                    <a href="#"><?php the_author_meta( 'description' ); ?> </a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>archive</h4>
                <ul>
                  <li>
                    <?php wp_get_archives( 'type=monthly' ); ?>
                  </li>
                </ul>
              </div>
            </div>
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>popular tags</h4>
                  <ul>
                    <li>
                      <a href="#">Portfolio</a>
                    </li>
                    <li>
                      <a href="#">Project</a>
                    </li>
                    <li>
                      <a href="#">Design</a>
                    </li>
                    <li>
                      <a href="#">Website</a>
                    </li>
                    <li>
                      <a href="#">Joomla</a>
                    </li>
                    <li>
                      <a href="#">Html</a>
                    </li>
                    <li>
                      <a href="#">wordpress</a>
                    </li>
                    <li>
                      <a href="#">Masonry</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->