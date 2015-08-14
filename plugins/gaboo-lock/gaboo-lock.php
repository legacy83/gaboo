<?php
/**
 * Plugin Name: Gaboo Lock
 * Plugin URI: https://github.com/trsenna/gaboo
 * Description: Protects the current website to be accidentally destroyed.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   GabooLock
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'gaboo_back_compat_safe', 'gaboo_lock_safe_bootstrap', 3 );

/**
 * Safely turn on the lights
 * ... and bootstrap the plugin
 */
function gaboo_lock_safe_bootstrap()
{
    __gaboo_run( new Gaboo_Lock() );
}