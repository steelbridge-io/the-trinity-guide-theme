<?php
/**
 * Customizer
 *
 * @package      Bootstrap for Genesis
 * @since        1.0
 * @link         http://webdevsuperfast.github.io
 * @author       Chris Parsons <webdevsuperfast.github.io>
 * @copyright    Copyright (c) 2017, Chris Parsons
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

add_action( 'customize_register', function( $wp_customize ) {
    // Add Default Settings
    $wp_customize->add_setting( 'the-trinity-guide-theme', array(
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod'
    ) );

    // Add Bootstrap Panel
    $wp_customize->add_panel( 'bootstrap', array(
        'title' => __( 'Bootstrap for Genesis', 'the-trinity-guide-theme' ),
        'priority' => 100
    ) );

    // Add Navigation Section
    $wp_customize->add_section( 'navigation', array(
        'title' => __( 'Navigation Settings', 'the-trinity-guide-theme' ),
        'priority' => 10,
        'panel' => 'bootstrap'
    ) );

    //* Add Navigation Controls
    $wp_customize->add_setting( 'navposition', array(
        'default' => ''
    ) );

    $wp_customize->add_control( 'navposition', array(
        'type' => 'select',
        'priority' => 10,
        'label' => __( 'Navigation Position', 'the-trinity-guide-theme' ),
        'section' => 'navigation',
        'choices' => array(
            '' => __( 'Default', 'the-trinity-guide-theme' ),
            'sticky-top' => __( 'Sticky Top', 'the-trinity-guide-theme' ),
            'fixed-top' => __( 'Fixed Top', 'the-trinity-guide-theme' ),
            'fixed-bottom' => __( 'Fixed Bottom', 'the-trinity-guide-theme' ),
        )
    ) );

    $wp_customize->add_setting( 'navcontainer', array(
        'default' => 'lg'
    ) );

    // Navigation Container
    $wp_customize->add_control( 'navcontainer', array(
        'type' => 'select',
        'priority' => 20,
        'label' => __( 'Navigation Container', 'the-trinity-guide-theme' ),
        'section' => 'navigation',
        'choices' => array(
            'sm' => __( 'Small', 'the-trinity-guide-theme' ),
            'md' => __( 'Medium', 'the-trinity-guide-theme' ),
            'lg' => __( 'Large', 'the-trinity-guide-theme' ),
            'xl' => __( 'Extra Large', 'the-trinity-guide-theme' )
        )
    ) );

    // Navigation Color
    $wp_customize->add_setting( 'navcolor', array(
        'default' => 'dark'
    ) );

    $wp_customize->add_control( 'navcolor', array(
        'type' => 'select',
        'priority' => 30,
        'label' => __( 'Navigation Background', 'the-trinity-guide-theme' ),
        'section' => 'navigation',
        'choices' => array(
            'light' => __( 'Light', 'the-trinity-guide-theme' ),
            'dark' => __( 'Dark', 'the-trinity-guide-theme' ),
            'primary' => __( 'Primary', 'the-trinity-guide-theme' )
        )
    ) );

    // Navigation Extras
    $wp_customize->add_setting( 'navextra', array(
        'default' => 'search'
    ) );

    $wp_customize->add_control( 'navextra', array(
        'type' => 'select',
        'priority' => 40,
        'label' => __( 'Navigation Extras', 'the-trinity-guide-theme' ),
        'section' => 'navigation',
        'choices' => array(
            '' => __( 'None', 'the-trinity-guide-theme' ),
            'date' => __( 'Date', 'the-trinity-guide-theme' ),
            'search' => __( 'Search Form', 'the-trinity-guide-theme' ),
            'widget' => __( 'Widget Area', 'the-trinity-guide-theme' )
        )
    ) );

    // Container Layout
    $wp_customize->add_section( 'container-layout', array(
        'title' => __( 'Container Layout', 'the-trinity-guide-theme' ),
        'priority' => 40,
        'panel' => 'bootstrap'
    ) );

    $wp_customize->add_setting( 'container', array(
        'default' => 'boxed',
    ) );

    $wp_customize->add_control( 'container', array(
        'type' => 'select',
        'priority' => 30,
        'label' => __( 'Container Settings', 'the-trinity-guide-theme' ),
        'section' => 'container-layout',
        'choices' => array(
            'fluid' => __( 'Fluid Layout', 'the-trinity-guide-theme' ),
            'boxed' => __( 'Boxed Layout', 'the-trinity-guide-theme' )
        )
    ) );

    // Footer Section
    $wp_customize->add_section( 'footer', array(
        'title' => __( 'Footer Section', 'the-trinity-guide-theme' ),
        'priority' => 40,
        'panel' => 'bootstrap'
    ) );

    $wp_customize->add_setting( 'footerwidgetbg', array(
        'default' => 'dark'
    ) );

    $wp_customize->add_control( 'footerwidgetbg', array(
        'type' => 'select',
        'priority' => 30,
        'label' => __( 'Footer Widget Background', 'the-trinity-guide-theme' ),
        'section' => 'footer',
        'choices' => array(
            'light' => __( 'Light', 'the-trinity-guide-theme' ),
            'dark' => __( 'Dark', 'the-trinity-guide-theme' ),
            'primary' => __( 'Primary', 'the-trinity-guide-theme' )
        )
    ) );

    $wp_customize->add_setting( 'footerbg', array(
        'default' => 'dark'
    ) );

    $wp_customize->add_control( 'footerbg', array(
        'type' => 'select',
        'priority' => 30,
        'label' => __( 'Footer Background', 'the-trinity-guide-theme' ),
        'section' => 'footer',
        'choices' => array(
            'light' => __( 'Light', 'the-trinity-guide-theme' ),
            'dark' => __( 'Dark', 'the-trinity-guide-theme' ),
            'primary' => __( 'Primary', 'the-trinity-guide-theme' )
        )
    ) );
} );
