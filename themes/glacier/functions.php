<?php

/* ============================ */
/* :::::::::: Enqueue ::::::::: */
/* ============================ */

require_once get_template_directory() . '/inc/enqueue.php';

/* ============================ */
/* ::::::::: Ajax Load :::::::: */
/* ============================ */

require_once get_template_directory() . '/inc/ajax-load.php';

/* ============================ */
/* ::::::: Theme Support :::::: */
/* ============================ */

require_once get_template_directory() . '/inc/theme-support.php';

/* ============================ */
/* :::::::: Woo Support ::::::: */
/* ============================ */

require_once get_template_directory() . '/woocommerce/woo-support.php';

/* ============================ */
/* :::::::: TGM Plugin :::::::: */
/* ============================ */

require_once get_template_directory() .'/lib/tgm/glacier.php';

/* ============================ */
/* :::::::: Customizer :::::::: */
/* ============================ */

if ( class_exists('Kirki') ) : 

	require_once get_template_directory() . '/inc/customizer/customizer.php';
	require_once get_template_directory() . '/inc/typekit-kirki.php';

endif;

/* ============================ */
/* ::::::: Aqua Resizer ::::::: */
/* ============================ */

require_once get_template_directory() . '/lib/aq_resizer/aq_resizer.php';

/* ============================ */
/* :::::::: Menu Walker ::::::: */
/* ============================ */

require_once get_template_directory() . '/inc/nav-walker.php';

/* ============================ */
/* ::::: Comments Walker :::::: */
/* ============================ */

require_once get_template_directory() . '/inc/comments-walker.php';

/* ============================ */
/* ::::::: Merlin Config :::::: */
/* ============================ */

require_once get_template_directory() . '/merlin/vendor/autoload.php';
require_once get_template_directory() . '/merlin/class-merlin.php';
require_once get_template_directory() . '/inc/merlin-config.php';

/* ============================ */
/* :::::::: Gutenberg ::::::::: */
/* ============================ */

require_once get_template_directory() . '/inc/gutenberg.php';



?>