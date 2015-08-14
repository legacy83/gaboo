<?php
/**
 * Plugin Name: Gaboo Shortcodes
 * Plugin URI: https://github.com/trsenna/gaboo
 * Description: Shortcodes collection to be used with the current website.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   GabooShortcodes
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'gaboo_back_compat_safe', 'gaboo_shortcodes_safe_includes', 5 );
add_action( 'gaboo_back_compat_safe', 'gaboo_shortcodes_safe_bootstrap', 5 );

/**
 * Safely continues
 * ... with the includes needed by the plugin
 */
function gaboo_shortcodes_safe_includes()
{
    require_once( 'includes/class-gaboo-shortcodes.php' );
    require_once( 'includes/class-gaboo-shortcodes-assets.php' );
}

/**
 * Safely continues
 * ... with the plugin bootstrap
 */
function gaboo_shortcodes_safe_bootstrap()
{
    __gaboo_plugins_loaded( new Gaboo_Shortcodes() );
    __gaboo_plugins_loaded( new Gaboo_Shortcodes_Assets() );
}