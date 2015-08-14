<?php

/**
 * Class Gaboo_Core_Comments
 */
final class Gaboo_Core_Comments
{
    function __plugins_loaded()
    {
        add_action( 'init', array( $this, 'disallow' ) );
    }

    /**
     * The init hook
     * ... that disallow pings and comments.
     */
    function disallow()
    {
        add_filter( 'comments_open', '__return_false' );
        add_filter( 'pings_open', '__return_false' );
    }
}