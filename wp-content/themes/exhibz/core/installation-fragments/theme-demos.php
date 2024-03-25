<?php
function exhibz_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = 'https://demo.themewinter.com/wp/demo-content/exhibz';
	$demos_array			 = array(
		'default'			 => array(
			'title'			 => esc_html__( 'Main Demo (01-11)', 'exhibz' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/default/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'onepage'			 => array(
			'title'			 => esc_html__( 'One Page', 'exhibz' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/onepage/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'foodfestival'			 => array(
			'title'			 => esc_html__( 'Food Festival Home', 'exhibz' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/foodfestival/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'education'			 => array(
			'title'			 => esc_html__( 'Education Home', 'exhibz' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/education/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'classic20'			 => array(
			'title'			 => esc_html__( 'Classic20 Home', 'exhibz' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/classic20/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'woo'			 => array(
			'title'			 => esc_html__( 'Exhibz woo', 'exhibz' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/woo/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'multi_event'			 => array(
			'title'			 => esc_html__( 'Multi Event', 'exhibz' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/multi_event/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'creative_conference'			 => array(
			'title'			 => esc_html__( 'Creative Conference', 'exhibz' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/creative_conference/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		
	);

	$download_url			 = esc_url( $demo_content_installer ) . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo						 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', 'exhibz_fw_ext_backups_demos' );

function demo_license_content() {
	?>
	<div class="license-wrap">
		<h2 class="license-title"><?php esc_html_e( 'Please Activate Your License', 'nuclear-txd' ); ?></h2>
		<div class="license-desc">
			<div class="notice-icon">
				<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M8.27148 5.6001V9.80009" stroke="#FF7129" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M15.536 6.26402V11.736C15.536 12.632 15.056 13.464 14.28 13.92L9.52801 16.664C8.75201 17.112 7.792 17.112 7.008 16.664L2.256 13.92C1.48 13.472 1 12.64 1 11.736V6.26402C1 5.36802 1.48 4.53599 2.256 4.07999L7.008 1.336C7.784 0.888 8.74401 0.888 9.52801 1.336L14.28 4.07999C15.056 4.53599 15.536 5.36002 15.536 6.26402Z" stroke="#FF7129" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M8.27148 12.3599V12.4399" stroke="#FF7129" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</div>
			<p>
			<?php 
				echo exhibz_kses('In order to get regular update, support and demo content, you must activate the theme license. Please  <a href="'. admin_url('themes.php?page=license') .'">Goto License Page</a> and activate the theme license as soon as possible.	','exhibz');
			?>
			</p>
		</div>
	</div>
	<?php
}

function set_license_menu() {
	if ( theme_is_valid_license() ) {
		return;
	}

	remove_submenu_page('tools.php', 'fw-backups-demo-content');
	$page = isset( $_GET['page'] ) ? sanitize_text_field( $_GET['page'] ) : '';

	if ( 'fw-backups-demo-content' === $page ) {
		// wp_die('Sorry, you are not allowed to access this page', '');
		wp_redirect(admin_url("themes.php?page=license"));
	}

	add_submenu_page(
		'tools.php',
		'Demo Content Install',
		'Demo Content Install',
		'manage_options',
		'demo-content',
		'demo_license_content'
	);
}

add_action('admin_menu', 'set_license_menu', 999);



