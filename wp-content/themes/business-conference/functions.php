<?php

require get_stylesheet_directory() . '/customizer/options-services.php';
require get_stylesheet_directory() . '/customizer/options-partners.php';
require get_stylesheet_directory() . '/sections/services.php';
require get_stylesheet_directory() . '/sections/partners.php';

add_action( 'wp_enqueue_scripts', 'business_conference_chld_thm_parent_css' );
function business_conference_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'business_conference_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );

    if ( is_rtl() ) {
        wp_enqueue_style( 
            'business_conference_parent_rtl', 
            trailingslashit( get_template_directory_uri() ) . 'rtl.css'
        );
    }
    
}

add_action( 'after_setup_theme', 'business_conference_setup_theme' );
function business_conference_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}

add_filter( 'bizberg_sidebar_settings', 'business_conference_sidebar_settings' );
function business_conference_sidebar_settings(){
    return '1';
}

add_filter( 'bizberg_footer_social_links' , 'business_conference_footer_social_links' );
function business_conference_footer_social_links(){
    return [];
}

add_filter( 'bizberg_link_color', 'business_conference_link_color' );
function business_conference_link_color(){
    return '#e91e63';
}

add_filter( 'bizberg_theme_color', 'business_conference_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'business_conference_change_theme_color' );
add_filter( 'bizberg_header_button_color_sticky_menu', 'business_conference_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover_sticky_menu', 'business_conference_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover', 'business_conference_change_theme_color' );
add_filter( 'bizberg_header_button_color', 'business_conference_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover', 'business_conference_change_theme_color' );
add_filter( 'bizberg_slider_title_box_highlight_color', 'business_conference_change_theme_color' );
add_filter( 'bizberg_slider_arrow_background_color', 'business_conference_change_theme_color' );
add_filter( 'bizberg_slider_dot_active_color', 'business_conference_change_theme_color' );
add_filter( 'bizberg_read_more_background_color', 'business_conference_change_theme_color' );
add_filter( 'bizberg_read_more_background_color_2', 'business_conference_change_theme_color' );
add_filter( 'bizberg_link_color_hover', 'business_conference_change_theme_color' );
add_filter( 'bizberg_blog_listing_pagination_active_hover_color', 'business_conference_change_theme_color' );
add_filter( 'bizberg_sidebar_widget_link_color_hover', 'business_conference_change_theme_color' );
add_filter( 'bizberg_sidebar_widget_title_color', 'business_conference_change_theme_color' );
add_filter( 'bizberg_footer_social_icon_background', 'business_conference_change_theme_color' );
add_filter( 'bizberg_background_color_1', 'business_conference_change_theme_color' );
add_filter( 'bizberg_background_color_2', 'business_conference_change_theme_color' );
add_filter( 'bizberg_transparent_header_menu_color_hover', 'business_conference_change_theme_color' );
add_filter( 'bizberg_transparent_header_sticky_menu_color_hover', 'business_conference_change_theme_color' );
function business_conference_change_theme_color(){
    return '#e91e63';
}

add_filter( 'bizberg_three_col_listing_radius', 'business_conference_three_col_listing_radius' );
function business_conference_three_col_listing_radius(){
    return '0';
}

add_filter( 'bizberg_transparent_header_homepage', 'business_conference_transparent_header_homepage' );
function business_conference_transparent_header_homepage(){
    return false;
}

add_filter( 'bizberg_transparent_navbar_background', 'business_conference_transparent_navbar_background' );
function business_conference_transparent_navbar_background(){
    return 'rgba(10,10,10,0)';
}

add_filter( 'bizberg_header_blur', 'business_conference_header_blur' );
function business_conference_header_blur(){
    return 0;
}

add_filter( 'bizberg_transparent_header_menu_sticky_background', 'business_conference_transparent_header_menu_sticky_background' );
add_filter( 'bizberg_transparent_header_menu_toggle_color_mobile', 'business_conference_transparent_header_menu_sticky_background' );
function business_conference_transparent_header_menu_sticky_background(){
    return '#fff';
}

add_filter( 'bizberg_transparent_header_menu_sticky_text_color', 'business_conference_transparent_header_menu_sticky_text_color' );
function business_conference_transparent_header_menu_sticky_text_color(){
    return '#64686d';
}

add_filter( 'bizberg_banner_spacing', 'business_conference_banner_spacing' );
function business_conference_banner_spacing(){
    return [
        'padding-top'    => '60px',
        'padding-bottom' => '60px',
        'padding-left'   => '150px',
        'padding-right'  => '150px',
    ];
}

add_filter( 'bizberg_banner_image', 'business_conference_banner_image' );
function business_conference_banner_image(){
    return [
        'background-color'      => 'rgba(20,20,20,.8)',
        'background-image'      => get_stylesheet_directory_uri() . '/img/action-african-american-african-descent-american-asian-black-1447827-pxhere.com.jpg',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll'
    ];
}

add_filter( 'bizberg_banner_title', 'business_conference_banner_title' );
function business_conference_banner_title(){
    return current_user_can( 'edit_theme_options' ) ? esc_html__( "Inspire, Innovate, Influence: A Business Revolution", 'business-conference' ) : '';
}

add_filter( 'bizberg_banner_subtitle', 'business_conference_banner_subtitle' );
function business_conference_banner_subtitle(){
    return current_user_can( 'edit_theme_options' ) ? esc_html__( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.', 'business-conference' ) : '';
}

add_filter( 'bizberg_banner_title_font_status' , 'business_conference_banner_title_font_status' );
function business_conference_banner_title_font_status(){
    return true;
}

add_filter( 'bizberg_banner_title_font_desktop' , 'business_conference_banner_title_font_desktop' );
function business_conference_banner_title_font_desktop(){
    return [
        'font-family'    => 'Lato',
        'variant'        => '500',
        'font-size'      => '50px',
        'line-height'    => '1.1',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ];
}

add_filter( 'bizberg_banner_title_font_tablet' , 'business_conference_banner_title_font_tablet' );
function business_conference_banner_title_font_tablet(){
    return [
        'font-size'      => '70px',
        'line-height'    => '1',
        'letter-spacing' => '0'
    ];
}

add_filter( 'bizberg_banner_title_font_mobile' , 'business_conference_banner_title_font_mobile' );
function business_conference_banner_title_font_mobile(){
    return [
        'font-size'      => '55px',
        'line-height'    => '1',
        'letter-spacing' => '0'
    ];
}

add_filter( 'bizberg_banner_subtitle_font_status' , 'business_conference_banner_subtitle_font_status' );
function business_conference_banner_subtitle_font_status(){
    return true;
}

add_filter( 'bizberg_banner_subtitle_font_settings_desktop' , 'business_conference_banner_subtitle_font_settings_desktop' );
function business_conference_banner_subtitle_font_settings_desktop(){
    return [
        'font-family'    => 'Poppins',
        'variant'        => 'regular',
        'font-size'      => '16px',
        'line-height'    => '1.6',
        'letter-spacing' => '0',
        'text-transform' => 'none'
    ];
}

add_filter( 'bizberg_transparent_header_sticky_menu_toggle_color_mobile' , 'business_conference_transparent_header_sticky_menu_toggle_color_mobile' );
function business_conference_transparent_header_sticky_menu_toggle_color_mobile(){
    return '#434343';
}

add_filter( 'bizberg_site_title_font', 'business_conference_site_title_font' );
function business_conference_site_title_font(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => '600',
        'font-size'      => '23px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'uppercase',
        'text-align'     => 'left',
    ];
}

add_filter( 'bizberg_site_tagline_font', 'business_conference_site_tagline_font' );
function business_conference_site_tagline_font(){
    return [
        'font-family'    => 'Montserrat',
        'variant'        => '300',
        'font-size'      => '13px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ];
}

add_filter( 'bizberg_sidebar_spacing_status', 'business_conference_sidebar_spacing_status' );
function business_conference_sidebar_spacing_status(){
    return '0px';
}

add_filter( 'bizberg_sidebar_widget_border_color', 'business_conference_sidebar_widget_background_color' );
add_filter( 'bizberg_sidebar_widget_background_color', 'business_conference_sidebar_widget_background_color' );
function business_conference_sidebar_widget_background_color(){
    return 'rgba(251,251,251,0)';
}

add_filter( 'bizberg_sticky_header_status', 'business_conference_sticky_header_status' );
function business_conference_sticky_header_status(){
    return 'false';
}

add_filter( 'bizberg_sticky_sidebar_margin_top_status', 'business_conference_sticky_sidebar_margin_top_status' );
function business_conference_sticky_sidebar_margin_top_status(){
    return 20;
}

add_filter( 'bizberg_banner_text_position' , 'business_conference_banner_text_position' );
function business_conference_banner_text_position(){
    return 'center';
}

add_filter( 'bizberg_sticky_content_sidebar' , 'business_conference_sticky_content_sidebar' );
function business_conference_sticky_content_sidebar(){
    return false;
}

add_filter( 'bizberg_hide_homepage_page_title' , 'business_conference_hide_homepage_page_title' );
function business_conference_hide_homepage_page_title(){
    return 'none';
}

add_filter( 'bizberg_getting_started_screenshot', 'business_conference_getting_started_screenshot' );
function business_conference_getting_started_screenshot(){
    return true;
}

add_action( 'after_switch_theme', 'business_conference_switch_theme' );
function business_conference_switch_theme() {

    $flag = get_theme_mod( 'business_conference_copy_settings', false );

    if ( true === $flag ) {
        return;
    }

    foreach( Kirki::$fields as $field ) {
        set_theme_mod( $field["settings"],$field["default"] );
    }

    //Set flag
    set_theme_mod( 'business_conference_copy_settings', true );
    
}