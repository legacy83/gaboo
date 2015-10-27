<?php

/**
 * Class Gaboo_Clip
 */
abstract class Gaboo_Clip
{
    /**
     * Render/Clip the template
     *
     * @param       $template
     * @param array $model
     *
     * @return string
     */
    function render( $template, array $model = array() )
    {
        ob_start();

        $located = $this->locate_template( $template );
        if ( $located ) {
            if ( is_array( $model ) ) extract( $model );
            include( "$located" );
        }

        return trim( ob_get_clean() );
    }

    /**
     * Render/Clip template and make the query available.
     *
     * @param          $template
     * @param WP_Query $the_query
     * @param array    $model
     *
     * @return string
     */
    function render_query( $template, WP_Query $the_query, array $model = array() )
    {
        if ( is_array( $model ) ) {
            $model[ 'the_query' ] = $the_query;
        }

        return $this->render( $template, $model );
    }

    /**
     * Locate the template
     *
     * @param $template
     *
     * @return bool|string
     */
    abstract protected function locate_template( $template );
}