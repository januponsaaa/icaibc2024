<?php 
    if(!empty($all_locations)) {
?>

    <div class="row">
        <?php       
            foreach($all_locations as $location):
                $location_featured_image = fw_get_db_term_option($location->term_id, 'event_location', 'featured_upload_img');
                $location_name = $location-> name;
                $count = get_term( $location->term_id , 'event_location' ); 
                ?>
                <div class="col-lg-<?php echo esc_attr($etn_event_col); ?> col-md-6">
                    <div class="location-box">
                        <?php if(!empty($location_featured_image)){ ?>
                            <div class="location-image">
                                <a href="<?php echo esc_url( get_term_link($location->term_id, 'event_location') ); ?>">
                                    <img src="<?php echo esc_url($location_featured_image['url']); ?>" alt="<?php echo esc_attr__('location image', 'exhibz'); ?>" />
                                </a>
                            </div>
                        <?php } ?>
                        <div class="location-des">
                            <a href="<?php echo esc_url( get_term_link($location->term_id, 'event_location') ); ?>">
                                <span class="location-name"><?php echo esc_html($location_name); ?></span>
                                <span class="event-number">
                                    <?php
                                    $event_count = $count->count;

                                    $count = sprintf( _n( '%s Event', '%s Events', $event_count, 'exhibz' ), $event_count );
                                    
                                    // "3 stars"
                                    esc_html_e($count);

                                 ?> </span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>   
    </div>

<?php } ?>
