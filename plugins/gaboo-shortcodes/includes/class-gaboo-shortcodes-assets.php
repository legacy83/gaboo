<?php

/**
 * Class Gaboo_Shortcodes_Assets
 *
 */
final class Gaboo_Shortcodes_Assets extends Gaboo_Assets
{
    function __plugins_loaded()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ), 5 );
    }

    /**
     * Enqueue styles needed by the current website.
     */
    function enqueue_styles()
    {
        $this->enqueue_style( 'pure-grids' );
        $this->enqueue_style( 'pure-grids-responsive' );
    }

}