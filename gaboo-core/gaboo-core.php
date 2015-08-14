<?php
/**
 * Plugin Name: Gaboo Core
 * Plugin URI: https://github.com/trsenna/gaboo
 * Description: All the core functionality needed to run a well done website.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   GabooCore
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'gaboo_back_compat_safe', 'gaboo_core_safe_includes', 3 );
add_action( 'gaboo_back_compat_safe', 'gaboo_core_safe_bootstrap', 3 );

/**
 * Safely continues
 * ... with the includes needed by the plugin
 */
function gaboo_core_safe_includes()
{
    require_once( 'includes/class-gaboo-core-assets.php' );
    require_once( 'includes/class-gaboo-core-comments.php' );
    require_once( 'includes/class-gaboo-core-google-fonts.php' );
    require_once( 'includes/class-gaboo-core-jetpack-friendly.php' );
}

/**
 * Safely continues
 * ... with the plugin bootstrap
 */
function gaboo_core_safe_bootstrap()
{
    __gaboo_plugins_loaded( new Gaboo_Core_Assets() );
    __gaboo_plugins_loaded( new Gaboo_Core_Comments() );
    __gaboo_plugins_loaded( new Gaboo_Core_Jetpack_Friendly() );
}