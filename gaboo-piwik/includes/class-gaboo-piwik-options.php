<?php

final class Gaboo_Piwik_Options
{
    const GROUP = 'gaboo_piwik_options_group';
    const PAGE = 'gaboo_piwik_options_page';

    function __plugins_loaded()
    {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }


    function admin_menu()
    {
        add_options_page(
            'Web Analytics Settings',
            'Web Analytics',
            'manage_options',
            self::PAGE,
            array( $this, 'options_page' )
        );
    }

    function options_page()
    {
        include( 'partials/options-page.php' );
    }
}
