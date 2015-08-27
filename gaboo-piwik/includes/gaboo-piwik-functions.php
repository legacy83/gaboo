<?php

/**
 * Get piwik options with it's respective defaults.
 *
 * @return array
 */
function gaboo_piwik_get()
{
    return get_option( 'gaboo_piwik', array(
        'location' => '//piwik.192.168.27.12.xip.io/',
        'site_id' => 1,
    ) );
}
