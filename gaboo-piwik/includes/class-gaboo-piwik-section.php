<?php

/**
 * Class Gaboo_Piwik_Section
 */
final class Gaboo_Piwik_Section
{
    function __plugins_loaded()
    {
        add_action( 'admin_init', array( $this, 'admin_init' ) );
    }

    /**
     * Manage the piwik section and settings.
     */
    function admin_init()
    {
        $title = __( 'Piwik Web Analytics', 'gaboo-piwik' );
        register_setting( Gaboo_Piwik_Options::GROUP, 'gaboo_piwik', array( $this, 'sanitize_callback' ) );
        add_settings_section( 'gaboo_piwik_section', $title, array( $this, 'section_callback' ), Gaboo_Piwik_Options::PAGE );
    }

    /**
     * Render the piwik section.
     */
    function section_callback()
    {
        extract( gaboo_piwik_get() );
        include( 'partials/section-piwik.php' );
    }

    /**
     * Sanitize the piwik settings.
     *
     * @param $input
     *
     * @return array
     */
    function sanitize_callback( $input )
    {
        return array(
            'location' => trailingslashit( esc_url_raw( $input[ 'location' ] ) ),
            'site_id' => absint( $input[ 'site_id' ] ),
        );
    }
}