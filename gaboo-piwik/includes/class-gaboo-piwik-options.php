<?php

final class Gaboo_Piwik_Options
{
    const GROUP = 'gaboo_piwik_options_group';
    const PAGE = 'gaboo_piwik_options_page';

    function __plugins_loaded()
    {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    /**
     * Manage the admin menu.
     */
    function admin_menu()
    {
        $page_title = __( 'Web Analytics Settings', 'gaboo-piwik' );
        $menu_title = __( 'Web Analytics', 'gaboo-piwik' );
        add_options_page( $page_title, $menu_title, 'manage_options', self::PAGE, array( $this, 'options_page' ) );
    }

    /**
     * Render the options page.
     */
    function options_page()
    {
        include( 'partials/options-page.php' );
    }
}
