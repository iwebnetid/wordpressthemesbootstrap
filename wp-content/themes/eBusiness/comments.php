            
         <?php if ( post_password_required() ) {
	return;
} ?>   
              <div class="single-post-comments">
              	  
              	  <?php if ( have_comments() ) : ?>
                <div class="comments-area">
                  <div class="comments-heading">
                    <h3><?php
				printf( _nx( 'One comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'comments title'),
					number_format_i18n( get_comments_number() ), get_the_title() );
				?></h3>
                  </div>
                  <div class="comments-list">
                    <ul>
                      <li class="threaded-comments">
                        <div class="comments-details">
                          <div class="comments-list-img">
                            
                    <?php 
				wp_list_comments( array(
					'short_ping'  => true,
					'avatar_size' => 50,
				) );
				?>
                          </div>
                    <?php endif; ?>
                          <div class="comments-content-wrap">
                    <div class="comment-respond">
                  <h3 class="comment-reply-title">  <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?></h3>
                            <span>
				<span class="post-time"><?php _e( 'Comments are closed.' ); ?></span>
                            
                            </span>
                    
                            <p></p>
                    
                    <?php endif; ?>
                    	<?php comment_form(); ?>
                    	<form>
                    
                </div>
		
                          </div>
                        </div>
                      </li>
                      
                      
                    </ul>
                  </div>
                </div>
                		
                		
                
                  
                		
              
              </div>
              <!-- single-blog end -->