<?php


function glacier_ajax_load($wp_query = null, $loop = null) {


if ($wp_query == null) :

	global $wp_query;

else :

	$wp_query = $wp_query;

endif;

if ($loop == null) :

	global $loop;

else :

	$loop = $loop;

endif;

wp_enqueue_script('glacier_ajax_script', get_template_directory_uri() . '/assets/js/ajax-load.js', array('jquery'), '', true);

if ($wp_query) :

$max = $wp_query->max_num_pages;

endif;

if ($loop) :

$max = $loop->max_num_pages;

endif;

$paged = (get_query_var('paged') > 1) ? get_query_var('paged') : 1;


	wp_localize_script(
		'glacier_ajax_script',
		'ajax_load',
		array(
			'startPage' => $paged,
			'maxPages' => $max,
			'nextLink' => next_posts($max, false),
			'loadMoreButtonNone' => esc_html__('No More Posts', 'glacier'),
		)
	);
}


