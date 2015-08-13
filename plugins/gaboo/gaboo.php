<?php
/**
 * Plugin Name: Gaboo
 * Plugin URI: https://github.com/trsenna/gaboo
 * Description: It's just the enough functionality needed to safely bootstrap your website.
 *
 * Version: 0.1.0
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 *
 * @package   Gaboo
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2015, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/*
 * Turn on the lights
 * ... and bootstrap the plugin
 */

require_once( 'includes/gaboo-bootstrap.php' );
require_once( 'includes/class-gaboo-activated-last.php' );
require_once( 'includes/class-gaboo-back-compat.php' );

__gaboo_run( new Gaboo_Back_Compat() );
__gaboo_plugins_loaded( new Gaboo_Activated_Last( __FILE__ ) );