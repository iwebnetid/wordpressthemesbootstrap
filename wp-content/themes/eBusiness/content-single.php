<article class="blog-post-wrapper">
     <div class="post-thumbnail">
                     <?php	  
    if ( has_post_thumbnail() ) {
      echo  get_the_post_thumbnail();
    }
    ?>

                </div>

<div class="post-information">
	<h2><?php the_title(); ?></h2>
	 <div class="entry-meta">
	<span class="author-meta"><i class="fa fa-user"></i> <a href="#"><?php the_author(); ?></a></span><a href="#"></a>
	<span><i class="fa fa-clock-o"></i><?php the_date(); ?></span>
	<span class="tag-meta">
												<i class="fa fa-folder-o"></i>
												<a href="#">painting</a>,
												<a href="#">work</a>
											</span>
                    <span>
												<i class="fa fa-tags"></i>
												<a href="#">tools</a>,
												<a href="#"> Humer</a>,
												<a href="#">House</a>
											</span>
                    <span><i class="fa fa-comments-o"></i> <a href="#">6 comments</a></span></div>
 <?php the_content(); ?>
</div>
	</article><!-- /.blog-post -->
	
	