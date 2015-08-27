<?php
/**
 * Plugin Name: Gaboo Piwik
 * Plugin URI: https://github.com/trsenna/gaboo
 * Description: Piwik Web Analytics, the leading open-source analytics platform that give us more than just powerful analytics.
 *
 * Version: 0.2.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   GabooPiwik
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'gaboo_back_compat_safe', 'gaboo_piwik_safe_includes' );
add_action( 'gaboo_back_compat_safe', 'gaboo_piwik_safe_bootstrap' );

/**
 * Safely continues
 * ... with the includes needed by the plugin
 */
function gaboo_piwik_safe_includes()
{
    require_once( 'includes/class-gaboo-piwik.php' );
    require_once( 'includes/class-gaboo-piwik-options.php' );
    require_once( 'includes/class-gaboo-piwik-section.php' );
    require_once( 'includes/gaboo-piwik-functions.php' );
}

/**
 * Safely continues
 * ... with the plugin bootstrap
 */
function gaboo_piwik_safe_bootstrap()
{
    __gaboo_plugins_loaded( new Gaboo_Piwik() );
    __gaboo_plugins_loaded( new Gaboo_Piwik_Options() );
    __gaboo_plugins_loaded( new Gaboo_Piwik_Section() );
}