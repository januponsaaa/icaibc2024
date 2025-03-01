<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */

$options =[
    'general_settings' => [
            'title'		 => esc_html__( 'General settings', 'exhibz' ),
            'options'	 => [
                'preloader_show' => [
                    'type'			 => 'switch',
                    'label'		    => esc_html__( 'Preloader show', 'exhibz' ),
                    'desc'			 => esc_html__( 'Do you want to show preloader on your site ?', 'exhibz' ),
                    'value'         => 'no',
                    'left-choice'	 => [
                       'value'     => 'yes',
                       'label'	   => esc_html__( 'Yes', 'exhibz' ),
                    ],
                    'right-choice'	 => [
                       'value'	 => 'no',
                       'label'	 => esc_html__( 'No', 'exhibz' ),
                    ],
                  ],
                  'preloader_logo' => [
                    'label'	        => esc_html__( 'Preloader logo', 'exhibz' ),
                    'desc'	           => esc_html__( 'When you enable preloader then you can set preloader image otherwise default color preloader you will see', 'exhibz' ),
                    'type'	           => 'upload',
                    'image_only'      => true,
                 ],

                'general_text_logo' => [
                    'type'			   => 'switch',
                    'label'			   => esc_html__( 'Logo text', 'exhibz' ),
                    'desc'			   => '' ,
                    'value'           => 'no',
                    'left-choice'	 => [
                        'value'	 => 'yes',
                        'label'	 => esc_html__('Yes', 'exhibz'),
                    ],
                    'right-choice'	 => [
                       'value'	 => 'no',
                       'label'	 => esc_html__('No', 'exhibz'),
                      ],
                    ],
                    'general_text_logo_settings' => array(
                       'type' => 'multi-picker',
                       'picker' => 'general_text_logo',
              
                       'choices' => array(
                          'yes' => array(
                             
                             'general_text_logo_title' => array(
                                'type'  => 'text',
                                'value' => 'blog',
                                'label' => __('Title', 'exhibz'),
                             
                             ),
                          ),
                    ),      
                ),
                'general_main_logo' => [
                    'label'	        => esc_html__( 'Main logo', 'exhibz' ),
                    'desc'	           => esc_html__( 'It\'s the main logo, mostly it will be shown on "dark or coloreful" type area.', 'exhibz' ),
                    'type'	           => 'upload',
                    'image_only'      => true,
                 ],
                'general_dark_logo' => [
                    'label'	        => esc_html__( 'Dark logo', 'exhibz' ),
                    'desc'	           => esc_html__( 'It will be shown on any "light background" type area.', 'exhibz' ),
                    'type'	           => 'upload',
                    'image_only'      => true,
                 ],
                 'general_sticky_sidebar' => [
                    'type'			    => 'switch',
                    'label'			 => esc_html__( 'Sticky sidebar', 'exhibz' ),
                    'desc'			    => esc_html__( 'Use sticky sidebar?', 'exhibz' ),
                    'value'          => 'yes',
                    'left-choice' => [
                        'value'	 => 'yes',
                        'label'	 => esc_html__( 'Yes', 'exhibz' ),
                    ],
                    'right-choice' => [
                        'value'	 => 'no',
                        'label'	 => esc_html__( 'No', 'exhibz' ),
                    ],
               ],
               'blog_breadcrumb_show' => [
                    'type'			    => 'switch',
                    'label'			 => esc_html__( 'Breadcrumb', 'exhibz' ),
                    'desc'			    => esc_html__( 'Do you want to show breadcrumb?', 'exhibz' ),
                    'value'          => 'yes',
                    'left-choice'	 => [
                        'value'	 => 'yes',
                        'label'	 => esc_html__('Yes', 'exhibz'),
                    ],
                    'right-choice'	 => [
                        'value'	 => 'no',
                        'label'	 => esc_html__('No', 'exhibz'),
                    ],
                ],
                'blog_breadcrumb_length' => [
                    'type'			    => 'text',
                    'label'			 => esc_html__( 'Breadcrumb word length', 'exhibz' ),
                    'desc'			    => esc_html__( 'The length of the breadcumb text.', 'exhibz' ),
                    'value'          => '3',
                ],
                'general_social_links' => [
                    'type'          => 'addable-popup',
                    'template'      => '{{- title }}',
                    'popup-title'   => null,
                    'label' => esc_html__( 'Social links', 'exhibz' ),
                    'desc'  => esc_html__( 'Add social links and it\'s icon class bellow. These are all fontaweseome-4.7 icons.', 'exhibz' ),
                    'add-button-text' => esc_html__( 'Add new', 'exhibz' ),

                    'popup-options' => [
                        'title' => [ 
                            'type' => 'text',
                            'label'=> esc_html__( 'Title', 'exhibz' ),
                        ],
                        'icon_class' => [ 
                            'type' => 'new-icon',
                            'label'=> esc_html__( 'Social icon', 'exhibz' ),
                        ],
                        'url' => [ 
                            'type' => 'text',
                            'label'=> esc_html__( 'Social link', 'exhibz' ),

                        ],
                    ],
                   
                ],
                'attendee_show' => [
                    'type'			    => 'switch',
                    'label'			 => esc_html__( 'Event Attendee Show/Hide?', 'exhibz' ),
                    'desc'			    => esc_html__( 'Do you want to show or hide attendee?', 'exhibz' ),
                    'value'          => 'yes',
                    'left-choice'	 => [
                        'value'	 => 'yes',
                        'label'	 => esc_html__('Yes', 'exhibz'),
                    ],
                    'right-choice'	 => [
                        'value'	 => 'no',
                        'label'	 => esc_html__('No', 'exhibz'),
                    ],
                ],
                'attendee_length' => [
                    'type'			    => 'text',
                    'label'			 => esc_html__( 'How Many Attendee Want to SHow?', 'exhibz' ),
                    'desc'			    => esc_html__( 'How many attendee do you want to show?', 'exhibz' ),
                    'value'          => '6',
                ],
            ],
        ],
    ];
