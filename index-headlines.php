<?php
  $showopeningheadlinedescription = richone_themeoptions (esc_attr(('showopeningheadlinedescription')));
  if ((!empty($showopeningheadlinedescription)) && is_front_page() && is_home() && !(is_paged()) ) : ?>
    <div class="row">
      <div class="column small-12">
        <div class="archive-title-description">
          <h2 class="entry-title archive-title"><?php echo esc_html(richone_themeoptions('openingheadline')); ?></h2>
          <div class="taxonomy-description"><?php echo esc_html(richone_themeoptions('openingdescription')); ?></div>
        </div>
      </div>
    </div>
  <?php elseif ( is_category() ) : ?>
    <div class="row">
      <div class="column large-8 medium-10">
        <div class="archive-title-description">
          <h2 class="entry-title"><?php printf( single_cat_title( '', false )  );?></h2>
          <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
        </div>
      </div>
    </div>
  <?php elseif ( is_tag() ) : ?>
    <div class="row">
      <div class="column large-8 medium-10">
        <div class="archive-title-description">
          <h2 class="entry-title"><?php printf( single_tag_title( '', false )  );?></h2>
          <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
        </div>
      </div>
    </div>
  <?php elseif ( is_author() ) : ?>
    <div class="row">
      <div class="column large-8 medium-10">
        <div class="archive-title-description">
          <h2 class="entry-title archive-title author-title"><?php echo get_the_author(); ?></h2>
          <div class="taxonomy-description"><?php the_author_meta( 'description' ); ?></div>
        </div>
      </div>
    </div>
   <?php elseif ( is_search() ) : ?>
    <div class="row">
      <div class="column large-8 medium-10">
        <div class="archive-title-description">
          <h2 class="entry-title"><?php printf( esc_attr( 'Search for: %s', 'richone' ), '<i>' . get_search_query() . '</i>' ); ?></h2>
        </div>
      </div>
    </div>
  <?php elseif ( is_day() ) : ?>
    <div class="row">
      <div class="column large-8 medium-10">
        <div class="archive-title-description">
          <h2 class="entry-title"><?php printf( get_the_date() ); ?></h2>
        </div>
      </div>
    </div>
  <?php elseif ( is_month() ) : ?>
    <div class="row">
      <div class="column large-8 medium-10">
        <div class="archive-title-description">
          <h2 class="entry-title"><?php printf( get_the_date('F Y') ); ?></h2>
        </div>
      </div>
    </div>
  <?php elseif ( is_year() ) : ?>
    <div class="row">
      <div class="column large-8 medium-10">
        <div class="archive-title-description">
          <h2 class="entry-title"><?php printf( get_the_date('Y') ); ?></h2>
        </div>
      </div>
    </div>
<?php endif; ?>
