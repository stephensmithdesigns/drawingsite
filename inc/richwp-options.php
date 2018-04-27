<?php
// Options Page

	if ( ! function_exists( 'richone' ) ) :

		function richone_themeoptions( $name ) {
			$default_theme_options = array(
				'logo' => '',
				'colorhd' => '#FFFFFF',
				'colorhdfont' => '#000000',
				'colorhdfonthover' => '#0066cc',
				'color1' => '#0066cc',
				'colorfontbuttons' => '#FFFFFF',
				'displayrelatedposts' => '1',
				'showopeningheadlinedescription' => '1',
				'openingheadline' =>  get_bloginfo( 'name' ),
				'openingdescription' =>  get_bloginfo( 'description' ),
				'copyright' =>  get_bloginfo( 'name' ),
				'herofeaturedimage' => '1',
				'showexcerpts' => '1',
				'info' => '',
				);
		
			$options = wp_parse_args( get_option( 'richone' ), $default_theme_options );

			return $options[$name];
		}
	endif;

add_action( 'customize_register', 'richone_customize_register' );
function richone_customize_register( $wp_customize ) {

	$wp_customize->add_setting( 'richone[showopeningheadlinedescription]', array(
		'default' => richone_themeoptions( 'showopeningheadlinedescription' ),
		'sanitize_callback' => 'richone_sanitize_checkbox',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control( 'richone[showopeningheadlinedescription]', array(
		'settings' => 'richone[showopeningheadlinedescription]',
		'label'    => __( 'Display Opening Headline / Description on Front Page', 'richone' ),
		'section'  => 'title_tagline',
		'type'     => 'checkbox',
		'priority' => 120,
	) );

	$wp_customize->add_setting( 'richone[openingheadline]', array(
		'default' => richone_themeoptions( 'openingheadline' ),
		'sanitize_callback' => 'richone_sanitize_text_html',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'openingheadline', array(
		'label' => __( 'Opening Headline', 'richone' ),
		'section' => 'title_tagline',
		'settings' => 'richone[openingheadline]',
		'priority' => 130,
	) );

	$wp_customize->add_setting( 'richone[openingdescription]', array(
		'default' => richone_themeoptions( 'openingdescription' ),
		'sanitize_callback' => 'richone_sanitize_text_html',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'openingdescription', array(
		'label' => __( 'Opening Description', 'richone' ),
		'section' => 'title_tagline',
		'settings' => 'richone[openingdescription]',
		'priority' => 140,
	) );

	$wp_customize->add_section( 'richone_colors', array(
		'title' => __( 'Colors', 'richone' ),
		'priority' => 100,
	) );
	
	$wp_customize->add_setting( 'richone[colorhd]', array(
		'default' => richone_themeoptions( 'colorhd' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorhd', array(
		'label'   => __( 'Header Color', 'richone' ),
		'section' => 'richone_colors',
		'settings'   => 'richone[colorhd]',
		'priority' => 5,
	) ) );
	
	$wp_customize->add_setting( 'richone[colorhdfont]', array(
		'default' => richone_themeoptions( 'colorhdfont' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorhdfont', array(
		'label'   => __( 'Header Font Color', 'richone' ),
		'section' => 'richone_colors',
		'settings'   => 'richone[colorhdfont]',
		'priority' => 10,
	) ) );

	$wp_customize->add_setting( 'richone[colorhdfonthover]', array(
		'default' => richone_themeoptions( 'colorhdfonthover' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorhdfonthover', array(
		'label'   => __( 'Header Font Hover Color', 'richone' ),
		'section' => 'richone_colors',
		'settings'   => 'richone[colorhdfonthover]',
		'priority' => 10,
	) ) );

	$wp_customize->add_setting( 'richone[color1]', array(
		'default' => richone_themeoptions( 'color1' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color1', array(
		'label'   => __( 'Lead Color', 'richone' ),
		'section' => 'richone_colors',
		'settings'   => 'richone[color1]',
		'priority' => 20,
	) ) );	
	
	$wp_customize->add_setting( 'richone[colorfontbuttons]', array(
		'default' => richone_themeoptions( 'colorfontbuttons' ),
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
		
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'colorfontbuttons', array(
		'label'   => __( 'Button Font Color', 'richone' ),
		'section' => 'richone_colors',
		'settings'   => 'richone[colorfontbuttons]',
		'priority' => 40,
	) ) );

    $wp_customize->add_section( 'richone_misc', array(
		'title' => __( 'Misc.', 'richone' ),
		'priority' => 120,
	) );

	$wp_customize->add_setting( 'richone[showexcerpts]', array(
		'default' => richone_themeoptions( 'showexcerpts' ),
		'sanitize_callback' => 'richone_sanitize_checkbox',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control( 'richone[showexcerpts]', array(
		'settings' => 'richone[showexcerpts]',
		'label'    => __( 'Display Excerpts in Post Lists an Archives', 'richone' ),
		'section'  => 'richone_misc',
		'type'     => 'checkbox',
		'priority' => 5,
	) );

	$wp_customize->add_setting( 'richone[herofeaturedimage]', array(
		'default' => richone_themeoptions( 'herofeaturedimage' ),
		'sanitize_callback' => 'richone_sanitize_checkbox',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control( 'richone[herofeaturedimage]', array(
		'settings' => 'richone[herofeaturedimage]',
		'label'    => __( 'Display Featured Image on Single Post View', 'richone' ),
		'section'  => 'richone_misc',
		'type'     => 'checkbox',
		'priority' => 10,
	) );

	$wp_customize->add_setting( 'richone[displayrelatedposts]', array(
		'default' => richone_themeoptions( 'displayrelatedposts' ),
		'sanitize_callback' => 'richone_sanitize_checkbox',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control( 'richone[displayrelatedposts]', array(
		'settings' => 'richone[displayrelatedposts]',
		'label'    => __( 'Display Related Posts', 'richone' ),
		'section'  => 'richone_misc',
		'type'     => 'checkbox',
		'priority' => 20,
	) );
	
	$wp_customize->add_setting( 'richone[copyright]', array(
		'default' => richone_themeoptions( 'copyright' ),
		'sanitize_callback' => 'richone_sanitize_text_html',
		'type' => 'option',
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( 'copyright', array(
		'label' => __( 'Copyright Notice in Footer', 'richone' ),
		'section' => 'richone_misc',
		'settings' => 'richone[copyright]',
		'priority' => 30,
	) );
	
} 

function richone_sanitize_text_html( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function richone_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

/* Add CSS */
function richone_add_styles() {
  if ( ! function_exists( 'get_richicon_font' ) ) {
    $richicon_font = array(
        'base' => get_template_directory_uri()."/font/richicons",
        'version' => '13909199');
  } else {
    $richicon_font = get_richicon_font();
  }
 ?>
<style type="text/css">
@font-face {
  font-family: 'richicons';
  src: url('<?php echo esc_html($richicon_font['base']).".eot?".esc_html($richicon_font['version']); ?>');
  src: url('<?php echo esc_html($richicon_font['base']).".eot?".esc_html($richicon_font['version'])."#iefix"; ?>') format('embedded-opentype'),
    url('<?php echo esc_html($richicon_font['base']).".woff?".esc_html($richicon_font['version']); ?>') format('woff'),
    url('<?php echo esc_html($richicon_font['base']).".ttf?".esc_html($richicon_font['version']); ?>') format('truetype'),
    url('<?php echo esc_html($richicon_font['base']).".svg?".esc_html($richicon_font['version'])."#richicons"; ?>') format('svg');
    font-weight: normal;
    font-style: normal;
  }

#top-menu,
.top-bar ul ul,
ul.submenu {
	background-color:<?php echo esc_attr( richone_themeoptions('colorhd'));?>;
}

<?php if (esc_attr(richone_themeoptions('colorhd')) == "#ffffff") { ?>.top-bar ul ul, .menushop .is-dropdown-submenu a:hover {background: #f9f9f9;}<?php } ?>

a #sitetitle,
.top-bar a,
.icon-menu,
#iconmenu li:before,
.top-bar ul.submenu a,
.menushop .is-dropdown-submenu a,
.menushop .is-dropdown-submenu a:hover{
	color:<?php echo esc_attr( richone_themeoptions('colorhdfont'));?>;
}

.top-bar a:hover,
.top-bar .current-menu-item a,
.top-bar ul.submenu a:hover,
#iconmenu li:hover:before {
	color:<?php echo esc_attr( richone_themeoptions('colorhdfonthover'));?>;
}

a,
a:hover,
.postbox a:hover .entry-title,
#copyright a:hover,
#footermenu a:hover,
#footer-widget-area a:hover, 
#top-widget-area a:hover,
.pagination .prev:hover, 
.pagination .next:hover,
.comment-metadata a:hover, 
.fn a:hover
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>						
		,.woocommerce a.added_to_cart:before, .woocommerce .woocommerce-info::before<?php } }?>
	{
	color:<?php echo esc_attr( richone_themeoptions('color1'));?>;
}
.none
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>, 
		.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
		.woocommerce #payment #place_order,
		.woocommerce-page #payment #place_order,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce button.button,
		.woocommerce button.button:hover,
		.woocommerce a.button.alt:hover,
		.woocommerce button.button.alt:hover,
		.woocommerce input.button.alt:hover,
		.woocommerce input.button,
		.woocommerce-cart a.button,
		.woocommerce-cart a.button:hover,
		.add_to_cart_button:hover,
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt<?php } } ?>
	{
	background:<?php echo esc_attr( richone_themeoptions('color1'));?>;
}
.button,
.button:hover, 
.button:focus,
.add_to_cart_button:hover,
.add_to_cart_button:focus
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>,
		.woocommerce ul.products li.product .button,
		.woocommerce input.button:hover,
		.woocommerce span.onsale<?php } } ?>
{
	background-color:<?php echo esc_attr( richone_themeoptions('color1'));?>;
	color: <?php echo esc_attr( richone_themeoptions('colorfontbuttons'));?>;
}
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>
		
			.woocommerce .woocommerce-info{
				border-top-color: <?php echo esc_attr( richone_themeoptions('color1'));?>;
			} 
<?php 	} } ?>
.entry-content a.more-link,
.button,
.add_to_cart_button
<?php if ( function_exists( 'is_woocommerce' ) ) {
		if ( is_woocommerce() || is_cart() ||  is_checkout() ) { ?>
		.woocommerce ul.products li.product .button,
		.woocommerce input.button,
		.woocommerce input.button:hover,
		.woocommerce button.button,
		.woocommerce button.button:hover,
		.woocommerce-cart a.button,
		.woocommerce-cart a.button:hover,
		.woocommerce span.onsale<?php } } ?>
	{
	color:<?php echo esc_attr( richone_themeoptions('colorfontbuttons'));?>;
}
</style>
<?php } add_action('wp_head', 'richone_add_styles'); ?>