<?php
/**
 * Tema M&M Locações Blog — replica o visual do site estático.
 */

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
});

add_action('wp_enqueue_scripts', function () {
    // CSS oficial do site principal (mesma folha usada na home/sobre-nos)
    wp_enqueue_style('mm-site', 'https://mmlocacoespoltronas.com.br/css/style.css', [], '6');
    wp_enqueue_style('mm-theme', get_stylesheet_uri(), ['mm-site'], '1.0');
    // JS oficial do site (menu mobile, reveal, modal WhatsApp, filtro do blog)
    wp_enqueue_script('mm-main', 'https://mmlocacoespoltronas.com.br/js/main.js', [], '3', true);
});

/** Primeira categoria do post (nome e slug) para a etiqueta e o filtro. */
function mm_primeira_categoria($post_id = null) {
    $cats = get_the_category($post_id);
    if (empty($cats)) {
        return ['nome' => 'Blog', 'slug' => 'blog'];
    }
    return ['nome' => $cats[0]->name, 'slug' => $cats[0]->slug];
}
