<?php /* Template Name: Full Width - No Title - No Hero Image */ ?>
    <?php get_header(); ?>
    
    <div id="container" class="row">
        <div id="primary" class="small-12 columns">
          	<article <?php post_class('articlebox'); ?>>
        	<?php	
        		while ( have_posts() ) : the_post(); ?>
        			<div class="entry-content">
                        <?php 
                            the_content(); 
                            wp_link_pages();
                        ?>
                    </div><!-- .entry-content -->
        		<?php 
                    if ( comments_open() || get_comments_number() ) :
                    comments_template();
                    endif;
                    endwhile; 
                ?>
            </article>
        </div><!-- #primary -->           
    </div> <!-- #container -->
    
    <?php get_footer(); ?>