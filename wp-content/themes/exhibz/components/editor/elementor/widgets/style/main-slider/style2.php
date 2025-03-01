   <!-- banner start-->
<?php $swiper_class = \Elementor\Plugin::$instance->experiments->is_feature_active( 'e_swiper_latest' ) ? 'swiper' : 'swiper-container';?>
<section class="main-slider" data-controls="<?php echo esc_attr($slide_controls); ?>">
    <div class="<?php echo esc_attr($swiper_class); ?>">
        <div class="swiper-wrapper">
            <?php foreach ($exhibz_slider as $key => $value): 

                $col = $value['content_align_text']=='mr-auto'?'col-lg-10':'col-lg-10';
            ?>
            <div class="swiper-slide">    
                    <div class="banner-item overlay" style="background-image:url(<?php echo is_array($value["exhibz_slider_bg_image"])?$value["exhibz_slider_bg_image"]["url"]:''; ?>)">
                        <div class="container">
                            <div class="row align-items-center align-items-center <?php echo esc_attr($value["justify_content_text"]=='yes'?"justify-content-center slider-right-content":''); ?> ">
                                <div class="<?php echo esc_attr($col); ?> <?php echo esc_attr($value["justify_content_text"]=='yes'?'':$value['content_align_text']); ?>">
                                    <div class="banner-content-wrap">
                                        <?php if($value["exhibz_show_title_shap"]=="yes"): ?>
                                        <img class="title-shap-img" src="<?php echo esc_url( EXHIBZ_IMG.'/shap/title-white.png' ); ?> " alt="<?php esc_attr_e('shape','exhibz'); ?> ">
                                    <?php endif; ?>
                                        <p class="banner-info"><?php echo esc_html($value["exhibz_slider_title_top"]); ?></p>
                                        <h1 class="banner-title"><?php echo esc_html($value["exhibz_slider_title"]); ?></h1>

                                        <p class="banner-desc p-0">
                                        <?php echo wp_kses_post($value["exhibz_slider_description"]); ?>
                                        </p>
                                        <!-- Countdown end -->
                                        <div class="ts-banner-btn">
                                            <?php if($value["exhibz_button_one_text"]!=''): ?> 
                                            <a href="<?php echo esc_url($value["exhibz_button_one"]["url"]); ?>" class="btn"  target="<?php echo esc_attr($value["exhibz_button_one"]["is_external"] == "on" ? "_blank" : '_self'); ?>" rel="<?php echo esc_attr($value["exhibz_button_one"]["nofollow"] == "on" ? "" : 'nofollow'); ?>"><?php echo esc_html($value["exhibz_button_one_text"]); ?></a>
                                            <?php endif; ?>
                                            <?php if($value["exhibz_button_two_text"]!=''): ?> 
                                            <a href="<?php echo esc_url($value["exhibz_button_two"]["url"]); ?>" class="btn fill" target="<?php echo esc_attr($value["exhibz_button_two"]["is_external"] == "on" ? "_blank" : '_self'); ?>" rel="<?php echo esc_attr($value["exhibz_button_two"]["nofollow"] == "on" ? "" : 'nofollow'); ?>"><?php echo esc_html($value["exhibz_button_two_text"]); ?></a>
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                    <!-- Banner content wrap end -->
                                </div><!-- col end-->

                            </div><!-- row end-->
                        </div>
                        <!-- Container end -->
                    </div><!-- banner item end-->
            </div>    
            <?php endforeach; ?>
        </div>
        <?php if($dot_nav_show  == 'yes'): ?>
                <div class="swiper-pagination"></div>
            <?php endif; ?>
    </div>
        <?php if ("yes" == $arrow_nav_show ):
            ?>
            <div class="swiper-button-prev swiper-prev-item">
            <i class="icon icon-angle-left"></i>
            </div>
            <div class="swiper-button-next swiper-next-item">
            <i class="icon icon-angle-right"></i>
            </div>
        <?php endif; ?>
 </section>
      <!-- banner end-->