<?php 

namespace Wedevs\Academy\Frontend;

/**
 * Shortcode handler class
 */
class Shortcode
{
    /**
     * Class constructor
     */
    function __construct()
    {
        add_shortcode( 'wedevs_academy', [ $this, 'render_shortcode' ] );
    }

    /**
     * function for rendering shortcode
     * 
     * @param array $atts
     * @param string $content
     * 
     * @return string
     */
    public function render_shortcode($atts, $content = '')
    {
        return 'Hello From Shortcode !';
    }
}

