<?php
    function ju_social_customizer_section($wp_customize) {

        //setting is a value that is stored in DB
        $wp_customize->add_setting( 'ju_facebook_handle', [
            'default'       =>  ''
        ]); 

        $wp_customize->add_setting( 'ju_twitter_handle', [
            'default'       =>  ''
        ]); 

        $wp_customize->add_setting( 'ju_instagram_handle', [
            'default'       =>  ''
        ]); 

        $wp_customize->add_setting( 'ju_phone_handle', [
            'default'       =>  ''
        ]); 

        $wp_customize->add_setting( 'ju_email_handle', [
            'default'       =>  ''
        ]); 

    //section is a section in the customiser
        $wp_customize->add_section( 'ju_social_section', [
            'title'         => __( 'Udemy Social Settings', 'udemy' ),
            'priority'      => 30 //the lower number the higher placement
        ]); 


// controler takes care of updating value (setting in the database)

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_social_facebook_input',
            array(
                'label'          => __( 'Facebook Handle', 'udemy' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_facebook_handle'
                )
            )
        );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_social_twitter_input',
            array(
                'label'          => __( 'Twitter Handle', 'udemy' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_twitter_handle'
                )
            )
        );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_social_instagram_input',
            array(
                'label'          => __( 'Instagram Handle', 'udemy' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_instagram_handle'
                )
            )
        );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_phone_input',
            array(
                'label'          => __( 'Telephone Handle', 'udemy' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_phone_handle'
                )
            )
        );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'ju_email_input',
            array(
                'label'          => __( 'Email Handle', 'udemy' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_email_handle'
                )
            )
        );

    }