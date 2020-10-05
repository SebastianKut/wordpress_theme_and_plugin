<?php

function ju_misc_customizer_section( $wp_customize ){
    $wp_customize->add_setting( 'ju_header_show_search', [
        'default'       =>  'yes'
    ]); 

    $wp_customize->add_setting( 'ju_header_show_cart', [
        'default'       =>  'yes'
    ]); 

    $wp_customize->add_setting( 'ju_footer_copyright_text', [
        'default'       =>  'Copyrights &copy; 2017 All Rights Reserved'
    ]); 

    $wp_customize->add_setting( 'ju_header_tos_page', [
        'default'       =>  0
    ]); 

    $wp_customize->add_setting( 'ju_header_privacy_page', [
        'default'       =>  0
    ]); 

    $wp_customize->add_setting( 'ju_read_more_color', [
        'default'       =>  '#1ABC9C'
    ]);

    $wp_customize->add_setting( 'ju_report_file', [
        'default'       =>  ''
    ]);

    $wp_customize->add_section( 'ju_misc_section', [
        'title'         =>   __( 'Udemy Misc Settings', 'udemy' ),
        'priority'      =>   30,
        'panel'         =>   'udemy'
    ]); 


    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_header_show_search_input',
        array(
            'label'          => __( 'Show Search Button in Header', 'udemy' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_header_show_search',
            'type'           => 'checkbox',
            'choices'        => [
                'yes'        => 'yes'
            ]
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_header_show_cart_icon',
        array(
            'label'          => __( 'Show Cart Icon in Header', 'udemy' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_header_show_cart',
            'type'           => 'checkbox',
            'choices'        => [
                'yes'        => 'yes'
            ]
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_footer_show_copyright_text',
        array(
            'label'          => __( 'Show Copyright Text in Footer', 'udemy' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_copyright_text'
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_footer_show_tos_page',
        array(
            'label'          => __( 'Show TOS Page in Footer', 'udemy' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_header_tos_page',
            'type'           => 'dropdown-pages'
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'ju_footer_show_privacy_page',
        array(
            'label'          => __( 'Show Privacy Page in Footer', 'udemy' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_header_privacy_page',
            'type'           => 'dropdown-pages'
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'ju_read_more_color_input',
            array(
                'label'         =>  __( 'Read more link color', 'udemy' ),
                'section'       =>  'ju_misc_section',
                'settings'      =>  'ju_read_more_color',
            )
    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control(
        $wp_customize,
        'ju_report_file_input',
        array(
            'label'         =>  __( 'File Report', 'udemy' ),
            'section'       =>  'ju_misc_section',
            'settings'      =>  'ju_report_file',
        )
));

}