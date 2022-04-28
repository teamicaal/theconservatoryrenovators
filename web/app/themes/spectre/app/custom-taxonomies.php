<?php
function downloads_taxonomy() {
	register_taxonomy(
		'download_category',
		'download',
		array(
			'label'                         => __( 'Categories' ),
			'rewrite'                       => [
				'slug'       => 'category',
				'with_front' => false
			],
			'hierarchical'                  => true,
			'public'                        => false,
			'show_ui'                       => true,
			'show_admin_column'             => true,
			'show_in_nav_menus'             => true,
			'query_var'                     => true
		)
	);
}

add_action( 'init', 'downloads_taxonomy' );
