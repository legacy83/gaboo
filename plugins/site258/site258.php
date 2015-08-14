<?php
/**
 * Plugin Name: Site258 Functionality
 * Plugin URI: https://github.com/trsenna/gaboo
 * Description: All functionality needed by the Site258 website.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   Site258
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'gaboo_back_compat_safe', 'site258_safe_themes' );

/**
 * Safely register
 * ... themes for the current website.
 */
function site258_safe_themes()
{
    $base_directory = untrailingslashit( dirname( __FILE__ ) );
    register_theme_directory( "{$base_directory}/themes" );
}