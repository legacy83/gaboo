<?php

/**
 * Class Gaboo_Assets
 *
 */
abstract class Gaboo_Assets
{
    /**
     * Register style and prefix it properly.
     *
     * @param        $handle
     * @param        $src
     * @param array  $deps
     * @param bool   $ver
     * @param string $media
     */
    protected function register_style( $handle, $src, $deps = array(), $ver = FALSE, $media = 'all' )
    {
        wp_register_style( "gaboo-{$handle}", $src, $deps, $ver, $media );
    }

    /**
     * Register script and prefix it properly.
     *
     * @param       $handle
     * @param       $src
     * @param array $deps
     * @param bool  $ver
     * @param bool  $in_footer
     */
    protected function register_script( $handle, $src, $deps = array(), $ver = FALSE, $in_footer = TRUE )
    {
        wp_register_script( "gaboo-{$handle}", $src, $deps, $ver, $in_footer );
    }

    /**
     * Prefix the style and enqueue it properly.
     *
     * @param        $handle
     * @param bool   $src
     * @param array  $deps
     * @param bool   $ver
     * @param string $media
     */
    protected function enqueue_style( $handle, $src = FALSE, $deps = array(), $ver = FALSE, $media = 'all' )
    {
        wp_enqueue_style( "gaboo-{$handle}", $src, $deps, $ver, $media );
    }

    /**
     * Prefix the script the enqueue it properly.
     *
     * @param       $handle
     * @param bool  $src
     * @param array $deps
     * @param bool  $ver
     * @param bool  $in_footer
     */
    protected function enqueue_script( $handle, $src = FALSE, $deps = array(), $ver = FALSE, $in_footer = TRUE )
    {
        wp_enqueue_script( "gaboo-{$handle}", $src, $deps, $ver, $in_footer );
    }

}