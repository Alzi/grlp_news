<?php
/**
 * Plugin Name: Grlp-News 
 * Description: Fügt einen Shortcode [news] hinzu, der es ermöglicht eine 3-spaltige Ansicht der neuesten Artikel anzuzeigen. Die Kategorie 'Presse' ist voreingestellt kann aber angepasst werden. Die 3 Spalten werden in gleicher Höhe angezeigt. Weitere Informationen gibt es auf der dazugehörigen Seite auf <a href="https://github.com/grlp_news">Github</a>
 * Version: 1.1.2
 * License: GPL v3 
 * License URI: https://www.gnu.org/licenses/gpl-3.0 
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
    extract( 
        shortcode_atts( 
            array(
                "titel"     => '',
                "spalten"   => 3,
                "kategorie" => 'presse',
            ),
            $atts
        )
    );

    $num_posts = intval( $spalten );
    $news_title = wp_strip_all_tags( $titel );
    $category = wp_strip_all_tags( $kategorie );

    $query = new WP_Query(
        [
            'post_type' => 'post',
            'posts_per_page' => $num_posts,
            'category_name' => $category,
            'post_status' => 'publish',
        ]
    );

    if ($query->have_posts()) {
        ob_start();
        require ('templates/news_header.php');
        $html .= ob_get_clean();
        while ($query->have_posts()) {
            $query->the_post();
            ob_start();
            require('templates/news_column.php');
            $html .= ob_get_clean();
        }
    }

    ob_start();
    require('templates/news_footer.php');
    $html .= ob_get_clean();
    wp_reset_postdata();
    return $html;
}
