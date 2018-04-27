<?php
// searchform.php - Thanx to Ole Fredrik https://foundationpress.olefredrik.com/
do_action( 'richonebefore_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url( '/' )); ?>">
	<?php do_action( 'richonesearchform_top' ); ?>
	<div class="input-group">
		<input type="text" class="input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'richone' ); ?>">
		<?php do_action( 'richonesearchform_before_search_button' ); ?>
		<div class="input-group-button">
			<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'richone' ); ?>" class="button">
		</div>
	</div>
	<?php do_action( 'richonesearchform_after_search_button' ); ?>
</form>
<?php do_action( 'richoneafter_searchform' ); ?>