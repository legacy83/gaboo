<?php

/**
 * Class Gaboo_Piwik
 */
final class Gaboo_Piwik
{
    function __plugins_loaded()
    {
        add_action( 'wp_footer', array( $this, 'the_tracking_code' ), 99 );
    }

    /**
     * Render the piwik tracking code.
     */
    function the_tracking_code()
    {
        extract( gaboo_piwik_get() );
        include( 'partials/tracking-code.php' );
    }
}