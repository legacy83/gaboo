<?php

/**
 * Get piwik options with it's respective defaults.
 *
 * @return array
 */
function gaboo_piwik_get()
{
    return get_option( 'gaboo_piwik', array(
        'location' => '//piwik.192.168.27.14.xip.io/',
        'site_id' => 1,
    ) );
}

/**
 * Get the templates filesystem directory path (with no trailing slash).
 *
 * @return string
 */
function gaboo_piwik_templates_dir_path()
{
    $templates_path = plugin_dir_path( dirname( __FILE__ ) );
    return untrailingslashit( "{$templates_path}/templates" );
}
