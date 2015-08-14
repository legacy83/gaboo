<?php

/**
 * Class Gaboo_Back_Compat
 */
final class Gaboo_Back_Compat
{
    function __run()
    {
        $safe = $this->safe();
        if ( $safe ) do_action( 'gaboo_back_compat_safe' );
        if ( !$safe ) do_action( 'gaboo_back_compat_unsafe' );
        if ( !$safe ) add_action( 'admin_notices', array( $this, 'unsafe_notice' ) );
    }

    /**
     * Check for the minimal PHP version.
     *
     * @return mixed
     */
    function minimal_php()
    {
        return version_compare( PHP_VERSION, '5.5.9', '>=' );
    }

    /**
     * Check for the minimal WordPress version.
     *
     * @return mixed
     */
    function minimal_wp()
    {
        return version_compare( $GLOBALS[ 'wp_version' ], '4.2.4', '>=' );
    }

    /**
     * Check for minimal system requirements.
     *
     * @return bool|mixed
     */
    function safe()
    {
        $requirements = $this->minimal_php();
        $requirements = $requirements && $this->minimal_wp();
        $requirements = $requirements && function_exists( 'gaboo_core_safe_bootstrap' );

        return $requirements;
    }

    /**
     * Add message for unsuccessful compatibility check.
     */
    function unsafe_notice()
    {
        $message = __( 'Unsafe environment for running the gaboo functionality plugin!', 'gaboo' );
        $message .= __( '&nbsp;The minimal system requirements has not been satisfied.', 'gaboo' );
        printf( '<div class="error"><p>%s</p></div>', $message );
    }

}