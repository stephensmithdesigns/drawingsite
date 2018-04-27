=== RichOne Theme ===

Contributors: RichWP, Felix Krusch
Requires at least: WordPress 4.8-trunk
Version: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: one-column, custom-colors, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, post-formats, theme-options, threaded-comments, translation-ready


== Description ==

A beautiful free portfolio and visual blogging WordPress theme with a minimalist nordic style. Perfect for photo, video and art galleries. No matter if you are a freelancer or own your own agency show your creativity to the world. Being a photographer, blogger, designer and illustrator myself, this is the theme I use to present my artwork. The code base is as lean, fast performing and rock solid as the theme’s timeless design. This theme can power your WordPress site for years to come. It is easy to install and work with on a daily basis. It is a truly hassle free and visually stunning solution to get your site online in a streamlined, futureproof and professional way. This theme is WooCommerce compatible as well as Jetpack and Gutenberg ready. Check out the demo: https://richwp.r1e9.com/richone/ What you see is what you get! No fluff, no compromise, just raw performance in a clean design.


== Installation ==

You find the installation instructions, a demo content package and further information about this theme here:
http://richwp.com/manuals/richone-theme-installation-manual/

The uncompressed .css and .js files can be found in the folder /assets/css/ and /assets/js/

If you need theme support or want to remove the credit links in the footer you need to purchase the PRO version of the richone theme http://richwp.com/themes/wordpress-portfolio-theme/ and contact felix@richwp.com

If you are looking for pofessional WordPress developers to do theme modifications please contact us under felix@richwp.com 


== Copyright ==

The RichOne WordPress Theme, Copyright 2018 RichWP
RichOne is distributed under the terms of the GNU GPL

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

RichOne bundles the following third-party resources:

## Built with the fantastic ZURB Foundation 6 Front End Framework
   License: MIT (https://en.wikipedia.org/wiki/MIT_License)
   Homepage: http://foundation.zurb.com/sites.html

## FitVids 1.1
   Author: Chris Coyier + Dave Rupert 
   License: WTFPL (http://sam.zoy.org/wtfpl/) 
   Homepage: http://css-tricks.com http://daverupert.com http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/ 

## Images in screenshot.png

   1. https://pixabay.com/en/surf-woman-mar-surfer-wave-1533278/
   Licence: Creative Commons CC0 https://creativecommons.org/publicdomain/zero/1.0/deed.en
   and
   2. https://pixabay.com/en/nude-dark-monochrome-wildlife-3055026/
   Licence: Creative Commons CC0 https://creativecommons.org/publicdomain/zero/1.0/deed.en

   3 + 4 by Theme Author
   Licence: Creative Commons CC0 https://creativecommons.org/publicdomain/zero/1.0/deed.en


## Font license info 
   Source: http://fontello.com

## Zocial
   Copyright (C) 2012 by Sam Collins
   Author:    Sam Collins
   License:   MIT (http://opensource.org/licenses/mit-license.php)
   Homepage:  http://zocial.smcllns.com/


## Entypo
   Copyright (C) 2012 by Daniel Bruce
   Author:    Daniel Bruce
   License:   SIL (http://scripts.sil.org/OFL)
   Homepage:  http://www.entypo.com


## Modern Pictograms
   Copyright (c) 2012 by John Caserta. All rights reserved.
   Author:    John Caserta
   License:   SIL (http://scripts.sil.org/OFL)
   Homepage:  http://thedesignoffice.org/project/modern-pictograms/


## Font Awesome
   Copyright (C) 2016 by Dave Gandy
   Author:    Dave Gandy
   License:   SIL ()
   Homepage:  http://fortawesome.github.com/Font-Awesome/


## MFG Labs
   Copyright (C) 2012 by Daniel Bruce
   Author:    MFG Labs
   License:   SIL (http://scripts.sil.org/OFL)
   Homepage:  http://www.mfglabs.com/


## Elusive
   Copyright (C) 2013 by Aristeides Stathopoulos
   Author:    Aristeides Stathopoulos
   License:   SIL (http://scripts.sil.org/OFL)
   Homepage:  http://aristeides.com/


== Changelog ==

V1.0.0 - 2017-11-20 Release of the RichWP RichOne Theme
V1.0.1 - 2017-11-21 Translation Fix
V1.0.2 - 2018-01-29 Set jQuery non-conflict in app.js; _e to esc_html_e in header.php, index.php, loop.php, single-related.php; custom excerpt lenght removed; use of wp_reset_postdata() instead of wp_reset_query() in page-subpagelist.php, include wp_link_pages() for every the_content(); new screenshot.png; readme.txt reformatted; image alignments
V1.0.3 - 2018-01-29 escaping output in footer.php, index-headlines.php, cart/cart.php, richwp-options.php, cart.php
V1.0.4 - 2018-02-13 gallery post format fix (up to 3 col), escaping output for remaining richone_options, changed require to require_once in function.php file line: 343, show excerpts in loop.php (optional, can be disabled in Misc. section within customizer)
V1.0.5 - 2018-03-07 removed "Display Site Title and Tagline option" from customizer, prefix added to full-width-image, changed function richone_new_excerpt_more, added a pingback url auto-discovery header for singularly identifiable articles, replaced esc_html_e() with esc_attr_e() in woocommerce/cart/cart.php, removed esc_attr from loop.php line 48 & page.php line 3 & single.php line 3 and line 97, changed query_posts() to new WP_Query in page-subpagelist.php
V1.0.6 - 2018-03-07 Changed default value of openingheadline and openingdescription option.
V1.0.7 - 2018-03-11 Changed screenshot.png to a more prude version, included name of license for these images into the readme.txt, added conditional on excerpt filter, removed pingbacklink from header, removed function_exists( 'the_custom_logo') from header.php, changed 'openingheadline' deault to  get_bloginfo( 'name' ) and openingdescription' to  get_bloginfo( 'description' )
V1.0.8 - 2018-03-12 Removed unneccessary () in woocommerce/cart.php line 60
V1.0.9 - 2018-03-16 Bugfix search variable in index-headlines.php line 43
V1.1.0 - 2018-03-22 topbar hover color fix, add closing > to entry-summery in loop.php