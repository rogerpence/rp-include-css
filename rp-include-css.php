<?php
/*
Plugin Name: rp-include-css
Description: Include a custom CSS file at the bottom of the page
Text Domain: rp-include-css
Version: 1.0
Author: Roger Pence
Author URI: rogerpence.dev
License: GPL2
*/

if (! defined('ABSPATH'))
{
    exit;
}

class IncludeCSS 
{
    public function __construct()
    {
        //add_action('wp_enqueue_scripts', array($this, 'load_css'));
        add_action('get_footer', array($this, 'load_css'));
    }

    public function load_css()
    {
        $handle = 'rp_include_css';
        $src = plugin_dir_url(__FILE__) . '/css/custom-site.css';
        $deps = array();
        $ver = '1.0';
        $media = 'all';
        wp_enqueue_style($handle, $src, $deps, $ver, $media);
    }

}

new IncludeCSS;

?>
