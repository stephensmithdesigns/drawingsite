<?php /* Template Name: Full Width - No Hero Image */ ?>
    <?php get_header(); ?>
    
    <div id="container" class="row">
        <div id="primary" class="small-12 columns">
          	<article <?php post_class('articlebox'); ?>>
        	<?php	
        		while ( have_posts() ) : the_post(); ?>
        
                	<header class="entry-header entry-header-single">
                        <h1 class="entry-title">
                            <?php the_title(); ?>
                        </h1>
                    </header>
        			<div class="entry-content">
                        <?php 
                            the_content(); 
                            wp_link_pages( array(
                                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'richone' ) . '</span>',
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                            ) );
                        ?>
                    </div><!-- .entry-content -->
            </article>
        </div><!-- #primary -->           
    </div> <!-- #container -->
    <div class="row">
        <div class="large-7 medium-8 small-11 small-centered columns">
        <?php 
            if ( comments_open() || get_comments_number() ) :
                    comments_template();
            endif;
            endwhile; 
            ?>
        </div>
    </div>
    <?php get_footer(); ?>