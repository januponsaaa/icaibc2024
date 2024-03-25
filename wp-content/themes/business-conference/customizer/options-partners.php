<?php

add_action( 'init' , 'business_conference_partners' );
function business_conference_partners(){

	Kirki::add_section( 'business_conference_partners', array(
        'title'   => esc_html__( 'Partners', 'business-conference' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'partners_status',
		'label'       => esc_html__( 'Enable / Disable', 'business-conference' ),
		'section'     => 'business_conference_partners',
		'default'     => false,
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'text',
		'settings'    => 'partners_title',
		'label'       => esc_html__( 'Title', 'business-conference' ),
		'section'     => 'business_conference_partners',
		'default'     => esc_html__( 'We Have More Then 1540+ Global Clients', 'business-conference' ),
		'active_callback' => [
			[
				'setting'  => 'partners_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'text',
		'settings'    => 'partners_subtitle',
		'label'       => esc_html__( 'Subtitle', 'business-conference' ),
		'section'     => 'business_conference_partners',
		'default'     => esc_html__( 'Our Partners', 'business-conference' ),
		'active_callback' => [
			[
				'setting'  => 'partners_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Partners', 'business-conference' ),
	    	'section'     => 'business_conference_partners',
	    	'settings'    => 'business_conference_partners',
	    	'active_callback' => [
				[
					'setting'  => 'partners_status',
					'operator' => '==',
					'value'    => true,
				]
			],
	    	'choices' => [
	        'button_label' => esc_html__( 'Add Partners', 'business-conference' ),
	        'row_label' => [
	            'value' => esc_html__( 'Partners', 'business-conference' ),
	        ],
	        'limit'  => 5,
	        'fields' => [
	        		'icon'  => [
	               'type'        => 'image',
	               'label'       => esc_html__( 'Image', 'business-conference' ),
	            ],
	        ],
	   ]
   ));

}