<?php
/**
 * Plugin Name: Grlp-News 
 * Description: Fügt einen Shortcode `[news]` hinzu, der es ermöglicht,
 *              eine 3-spaltige Ansicht der neuesten Artikel einer, oder
 *              mehrerer Kategorien anzuzeigen. Die 3 Spalten werden in
 *              gleicher Höhe angezeigt. 
 * Version: 1.0
 * Author: Marc Dietz 
 * Author URI: mailto:technik@gruene-rlp.de
 * Text Domain: grlp-news 
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'grlp_news_shortcode_init' );
function grlp_news_shortcode_init()
{
  add_shortcode( 'news', 'grlp_news_view' );
}

function grlp_news_view( $atts, $content, $shortcode_tag )
{
    $html = '';
    $news_title = '';
    $query = new WP_Query(
        [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category_name' => 'presse',
            'post_status' => 'publish',
        ]
    );

    if ( ! empty( $atts )) {
        if ( isset( $atts['titel'])) {
            $news_title = wp_strip_all_tags($atts['titel']);
        }
    }

    if ($query->have_posts()) {
        ob_start();
        require ('news_header.php');
        $html .= ob_get_clean();
        while ($query->have_posts()) {
            $query->the_post();
            ob_start();
            require('news_column.php');
            $html .= ob_get_clean();
        }
    }

    ob_start();
    require('news_footer.php');
    $html .= ob_get_clean();
    wp_reset_postdata();
    return $html;
}