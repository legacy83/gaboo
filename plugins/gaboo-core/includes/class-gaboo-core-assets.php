<?php

/**
 * Class Gaboo_Core_Assets
 *
 */
final class Gaboo_Core_Assets
{
    function __plugins_loaded()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ), 0 );
        add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ), 0 );
        add_action( 'wp_enqueue_scripts', array( $this, 'register_purecss_styles' ), 0 );
    }

    /**
     * Register well know CSS styles.
     */
    function register_styles()
    {
        $cdn_path = untrailingslashit( 'https://cdnjs.cloudflare.com/ajax/libs' );
        wp_register_style( 'gaboo-core-normalize', "$cdn_path/normalize/3.0.3/normalize.min.css" );
    }

    /**
     * Register well know JavaScript libraries.
     */
    function register_scripts()
    {
        $cdn_path = untrailingslashit( 'https://cdnjs.cloudflare.com/ajax/libs' );
        wp_register_style( 'gaboo-core-lodash', "$cdn_path/lodash.js/3.10.1/lodash.min.js" );
        wp_register_style( 'gaboo-core-knockout', "$cdn_path/knockout/3.3.0/knockout-min.js" );
    }

    /**
     * Register the PureCSS Framework styles.
     */
    function register_purecss_styles()
    {
        $cdn_path = untrailingslashit( 'http://yui.yahooapis.com/pure/0.6.0' );
        wp_register_style( 'gaboo-core-pure-base', "$cdn_path/base-min.css" );
        wp_register_style( 'gaboo-core-pure-buttons', "$cdn_path/buttons-min.css" );
        wp_register_style( 'gaboo-core-pure-forms', "$cdn_path/forms-min.css" );
        wp_register_style( 'gaboo-core-pure-grids', "$cdn_path/grids-min.css" );
        wp_register_style( 'gaboo-core-pure-grids-responsive', "$cdn_path/grids-responsive-min.css" );
        wp_register_style( 'gaboo-core-pure-menus', "$cdn_path/menus-min.css" );
        wp_register_style( 'gaboo-core-pure-tables', "$cdn_path/tables-min.css" );
    }

}