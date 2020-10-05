<?php

function ju_customize_register( $wp_customize ){

    // echo '<pre>';
    // var_dump( $wp_customize );
    // echo '</pre>';


    $wp_customize->get_section( 'title_tagline' )->title = 'General';

   

    //add panel method adds panel to the customizer - it is only added to customizer when its not empty so it has to be added to add_section function as a key 'panel' and value of the id ('udemy' in this case)
    $wp_customize->add_panel( 'udemy', [
        'title'         =>  __( 'Udemy', 'udemy' ),
        'description'   =>  '<p>Udemy Theme Settings</p>',
        'priority'      =>  160
    ]);


    ju_social_customizer_section( $wp_customize );
    ju_misc_customizer_section( $wp_customize );
}