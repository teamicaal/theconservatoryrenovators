<?php
// Downloads
$labels = array(
	'name'               => 'Downloads',
	'singular_name'      => 'Download',
	'menu_name'          => 'Downloads',
	'name_admin_bar'     => 'Download',
	'parent_item_colon'  => 'Parent Download:',
	'all_items'          => 'All Downloads',
	'add_new_item'       => 'Add New Download',
	'add_new'            => 'Add New',
	'new_item'           => 'New Download',
	'edit_item'          => 'Edit Download',
	'update_item'        => 'Update Download',
	'view_item'          => 'View Download',
	'search_items'       => 'Search Downloads',
	'not_found'          => 'Not found',
	'not_found_in_trash' => 'Not found in Trash',
);
$rewrite = array(
	'slug'       => 'downloads',
	'with_front' => false,
	'pages'      => true,
	'feeds'      => true,
);
$args    = array(
	'label'               => 'Download',
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
	'hierarchical'        => true,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 33,
	'menu_icon'           => 'dashicons-download',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'rewrite'             => $rewrite,
	'query_var'           => true,
	'capability_type'     => 'post',
);
register_post_type( 'download', $args );

// Redirect all single download items to download archive
add_action( 'template_redirect', 'redirect_single_download' );
function redirect_single_download() {
  if ( is_singular('download') ) {
    wp_redirect( get_post_type_archive_link('download'), 301 );
    exit;
  }
}