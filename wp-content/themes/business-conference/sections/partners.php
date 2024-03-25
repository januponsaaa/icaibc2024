<?php

add_action( 'bizberg_before_homepage_blog', 'business_conference_partners1' );
function business_conference_partners1(){ 

	$status = bizberg_get_theme_mod( 'partners_status' );

	if( empty( $status ) ){
		return;
	} 

	$subtitle = bizberg_get_theme_mod( 'partners_subtitle' ); 
	$title    = bizberg_get_theme_mod( 'partners_title' );  ?>

	<div class="our_partners">
		
		<div class="container">

			<div class="title_wrapper">
				
				<h3><?php echo esc_html( $subtitle ); ?></h3>
				<h2><?php echo esc_html( $title ); ?></h2>

			</div>

			<?php

			$partners = bizberg_get_theme_mod( 'business_conference_partners' );
			$partners = json_decode( $partners, true );

			if( !empty( $partners ) ){ ?>

				<div class="content">

					<?php 
					foreach( $partners as $partner ){

						$image_id = !empty( $partner['icon'] ) ? $partner['icon'] : ''; ?>

						<div class="partner">

							<img src="<?php echo esc_url( wp_get_attachment_image_url( $image_id, 'thumbnail' ) ); ?>">

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