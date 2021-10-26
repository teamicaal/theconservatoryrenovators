<?php
/*
 * Assign global variables
 */
$options = array();

function icaal_contact_form_menu() {
	add_options_page(
		'ICAAL Contact Form Settings',
		'Contact Forms',
		'manage_options',
		'icaal-contact',
		'icaal_contact_form_settings_page'
	);
}

add_action( 'admin_menu', 'icaal_contact_form_menu' );

function icaal_contact_form_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have permissions to access this page.' );
	}

	global $options;

	if ( isset( $_POST['icaal_contact_settings_submit'] ) ){
		$hidden_field = esc_html( $_POST['icaal_contact_form_hidden'] );

		if ($hidden_field == 'Y') {
			// API Stuff
			$options['api_key_name_1'] = esc_html( $_POST['icaal_contact_api_key_name_1'] );
			$options['api_key_1'] = esc_html( $_POST['icaal_contact_api_key_1'] );
			$options['api_key_name_2'] = esc_html( $_POST['icaal_contact_api_key_name_2'] );
			$options['api_key_2'] = esc_html( $_POST['icaal_contact_api_key_2'] );
			$options['api_key_name_3'] = esc_html( $_POST['icaal_contact_api_key_name_3'] );
			$options['api_key_3'] = esc_html( $_POST['icaal_contact_api_key_3'] );
			$options['api_key_name_4'] = esc_html( $_POST['icaal_contact_api_key_name_4'] );
			$options['api_key_4'] = esc_html( $_POST['icaal_contact_api_key_4'] );
			$options['api_key_name_5'] = esc_html( $_POST['icaal_contact_api_key_name_5'] );
			$options['api_key_5'] = esc_html( $_POST['icaal_contact_api_key_5'] );
			$options['api_key_name_6'] = esc_html( $_POST['icaal_contact_api_key_name_6'] );
			$options['api_key_6'] = esc_html( $_POST['icaal_contact_api_key_6'] );
			$options['api_key_name_7'] = esc_html( $_POST['icaal_contact_api_key_name_7'] );
			$options['api_key_7'] = esc_html( $_POST['icaal_contact_api_key_7'] );
			$options['api_key_name_8'] = esc_html( $_POST['icaal_contact_api_key_name_8'] );
			$options['api_key_8'] = esc_html( $_POST['icaal_contact_api_key_8'] );
			$options['api_key_name_9'] = esc_html( $_POST['icaal_contact_api_key_name_9'] );
			$options['api_key_9'] = esc_html( $_POST['icaal_contact_api_key_9'] );
			$options['api_key_name_10'] = esc_html( $_POST['icaal_contact_api_key_name_10'] );
			$options['api_key_10'] = esc_html( $_POST['icaal_contact_api_key_10'] );

			// Custom HTML
			$options['custom_html'] = esc_html( $_POST['icaal_contact_form_custom_html'] );

			$options['last_updated'] = time();

			update_option('icaal_contact_form', $options);
		}
	}

	$options = get_option('icaal_contact_form');

	if ($options != ''){
		// API Stuff
		$api_key_name_1 = $options['api_key_name_1'];
		$api_key_1 = $options['api_key_1'];
		$api_key_name_2 = $options['api_key_name_2'];
		$api_key_2 = $options['api_key_2'];
		$api_key_name_3 = $options['api_key_name_3'];
		$api_key_3 = $options['api_key_3'];
		$api_key_name_4 = $options['api_key_name_4'];
		$api_key_4 = $options['api_key_4'];
		$api_key_name_5 = $options['api_key_name_5'];
		$api_key_5 = $options['api_key_5'];
		$api_key_name_6 = $options['api_key_name_6'];
		$api_key_6 = $options['api_key_6'];
		$api_key_name_7 = $options['api_key_name_7'];
		$api_key_7 = $options['api_key_7'];
		$api_key_name_8 = $options['api_key_name_8'];
		$api_key_8 = $options['api_key_8'];
		$api_key_name_9 = $options['api_key_name_9'];
		$api_key_9 = $options['api_key_9'];
		$api_key_name_10 = $options['api_key_name_10'];
		$api_key_10 = $options['api_key_10'];

		// Custom HTML
		$custom_html = $options['custom_html'];
	}

	require( 'includes/settings-page-wrapper.php' );
}

function icaal_contact_scripts() {
	$options                = get_option( 'icaal_contact_form' );
	$options['custom_html'] = str_replace( '\\', '', $options['custom_html'] );
	?>
	<script>
	var icaal_options = <?php echo json_encode($options); ?>;
	var ajax_url = <?php echo json_encode(admin_url('admin-ajax.php')); ?>;
	var nonce = <?php echo json_encode(wp_create_nonce('icaal-contact')); ?>;
	</script>
	<?php
}
add_action('wp_enqueue_scripts', 'icaal_contact_scripts');
