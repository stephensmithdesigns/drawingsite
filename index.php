<?php get_header(); ?>

<div id="container" class="row">
  <div id="primary" class="columns">
    
    <?php get_template_part( 'index-headlines' ); ?>       
  
    <?php // List the posts
        if ( have_posts() ) : ?>
          <div class="medium-up-2 row">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'loop', get_post_format() ); ?>
            <?php endwhile; ?>
          </div>
    <?php // Pagination
          the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => '<div class="icon-left-open-big"></div>',
            'next_text' => '<div class="icon-right-open-big"></div>',
          ) ); ?> 

        <?php else: ?>
            <div class="row">
               <?php if ( is_search() ) : ?>
                  <div class="large-7 medium-10 columns">
                    <div class="archive-search">
                      <h5><?php esc_html_e( 'Nothing matched your search criteria. Please try searching again:', 'richone' ); ?></h5>
                      <?php get_search_form(); ?>
                    </div>      
                  </div>
                <?php elseif (is_404() ) : ?>
                  <div class="large-7 medium-8 small-11 small-centered columns">
                    <h3 class="errortitle"><?php esc_html_e( '404 - Sorry, nothing was found!', 'richone' ); ?></h3>
                  </div>
                <?php else: ?>
                  <div class="large-7 medium-8 small-11 small-centered columns">
                    <h3 class="errortitle"><?php esc_html_e( 'Sorry, nothing was found!', 'richone' ); ?></h3>
                  </div>
               <?php endif; ?>
            </div> 
        <?php endif; ?>


  </div><!-- #primary -->
              
                 
 
</div> <!-- #container -->

<?php get_footer(); ?>