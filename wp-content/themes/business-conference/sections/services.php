<?php

add_action( 'bizberg_before_homepage_blog', 'business_conference_home_services' );
function business_conference_home_services(){ 

	$status = bizberg_get_theme_mod( 'services_status' );

	if( empty( $status ) ){
		return;
	} 

	$subtitle = bizberg_get_theme_mod( 'services_subtitle' ); 
	$title    = bizberg_get_theme_mod( 'services_title' );
	$services = bizberg_get_theme_mod( 'business_conference_options_services' ); 
	$services = json_decode( $services, true ); ?>

	<div class="services">

		<div class="container">
			
			<div class="title_wrapper">
				
				<h3><?php echo esc_html( $subtitle ); ?></h3>
				<h2><?php echo esc_html( $title ); ?></h2>

			</div>

			<?php 

			if( !empty( $services ) ){ ?>

				<div class="content">

					<?php 

					foreach( $services as $key => $service ){

						$page_id = !empty( $service['page_id'] ) ? $service['page_id'] : '';

						$services_post = get_post( $page_id );

						$oneDigitNumber = $key + 1;
						$twoDigitNumber = sprintf("%02d", $oneDigitNumber);

						$content = wp_trim_words( sanitize_text_field( $services_post->post_content ) , 10, ' [...]' ) ?>
					
						<div class="item">
						
							<div class="number"><?php echo esc_html( $twoDigitNumber ); ?></div>
							<h4><?php echo esc_html( $services_post->post_title ); ?></h4>
							<p><?php echo esc_html( $content ); ?></p>

						</div>

						<?php 

					} ?>

				</div>

				<?php

			} ?>

		</div>

	</div>

	<?php
}