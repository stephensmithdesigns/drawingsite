<?php /* Template Name: Subpage List */ ?>
<?php get_header(); ?>

<div id="container" class="row">
	<div id="primary" class="large-7 medium-9 small-11 small-centered columns">
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
						wp_link_pages();
					?>
				</div><!-- .entry-content -->
			<?php endwhile;?>
	    </article>
	</div><!-- #primary -->

	<div class="medium-up-2 row">

	<?php

		// query subpages

		$args = array(
		    'post_type'      => 'page',
		    'posts_per_page' => -1,
		    'post_parent'    => $post->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		 );


		$parent = new WP_Query( $args );

		if ( $parent->have_posts() ) : 
			 while ( $parent->have_posts() ) : $parent->the_post(); 

		    	get_template_part( 'loop', get_post_format() ); 

		    endwhile; 
		endif; 

		wp_reset_postdata(); 
	?>

	</div>


</div> <!-- #container -->

<?php get_footer(); ?>