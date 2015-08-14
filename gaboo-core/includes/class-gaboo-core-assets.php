<?php

/**
 * Class Gaboo_Core_Assets
 *
 */
final class Gaboo_Core_Assets extends Gaboo_Assets
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
        $cdn_path = untrailingslashit( 'https://cdnjs.cloudflare.com/ajax/libs/' );
        $this->register_style( 'normalize', "$cdn_path/normalize/3.0.3/normalize.min.css" );
    }

    /**
     * Register well know JavaScript libraries.
     */
    function register_scripts()
    {
        $cdn_path = untrailingslashit( 'https://cdnjs.cloudflare.com/ajax/libs/' );
        $this->register_script( 'lodash', "$cdn_path/lodash.js/3.10.1/lodash.min.js" );
        $this->register_script( 'knockout', "$cdn_path/knockout/3.3.0/knockout-min.js" );
    }

    /**
     * Register the PureCSS Framework styles.
     */
    function register_purecss_styles()
    {
        $cdn_path = untrailingslashit( 'http://yui.yahooapis.com/pure/0.6.0/' );
        $this->register_style( 'pure-base', "$cdn_path/base-min.css" );
        $this->register_style( 'pure-buttons', "$cdn_path/buttons-min.css" );
        $this->register_style( 'pure-forms', "$cdn_path/forms-min.css" );
        $this->register_style( 'pure-grids', "$cdn_path/grids-min.css" );
        $this->register_style( 'pure-grids-responsive', "$cdn_path/grids-responsive-min.css" );
        $this->register_style( 'pure-menus', "$cdn_path/menus-min.css" );
        $this->register_style( 'pure-tables', "$cdn_path/tables-min.css" );
    }

}