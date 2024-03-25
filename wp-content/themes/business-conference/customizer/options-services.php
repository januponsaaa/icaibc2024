<?php

add_action( 'init' , 'business_conference_options_services' );
function business_conference_options_services(){

	Kirki::add_section( 'business_conference_options_services', array(
        'title'   => esc_html__( 'Services', 'business-conference' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'services_status',
		'label'       => esc_html__( 'Enable / Disable', 'business-conference' ),
		'section'     => 'business_conference_options_services',
		'default'     => false,
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'services_subtitle',
		'label'    => esc_html__( 'Subtitle', 'business-conference' ),
		'default'  => esc_html__( 'About Experience', 'business-conference' ),
		'section'  => 'business_conference_options_services',
		'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'services_title',
		'label'    => esc_html__( 'Title', 'business-conference' ),
		'default'  => esc_html__( 'We Have Than 25 Years Experience In Business Services', 'business-conference' ),
		'section'  => 'business_conference_options_services',
		'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Pages', 'business-conference' ),
	   'section'     => 'business_conference_options_services',
	   'settings'    => 'business_conference_options_services',
	   'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	   'choices' => [
	   	'limit' => 4,
	      'button_label' => esc_html__( 'Add Pages', 'business-conference' ),
	      'row_label' => [
	         'value' => esc_html__( 'Pages', 'business-conference' ),
	      ],
        	'fields' => [
            'page_id' => [
               'type'        => 'select',
               'label'       => esc_html__( 'Page', 'business-conference' ),
               'choices'     => bizberg_get_all_pages()
            ],
        ],
	   ]
   ));

}