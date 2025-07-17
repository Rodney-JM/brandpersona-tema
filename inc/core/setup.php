<?php

// Ativando recursos e configs do tema

function brand_persona_setup()
{
    add_theme_support('title-tag'); //titulo dinâmico
    add_theme_support('post-thumbnails'); //thumbnails em posts e paginas
    add_theme_support('custom-logo');// logo customizável
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));

    //menus personalizados
    register_nav_menus(array(
        'menu-principal' => 'Menu Principal',
        'menu-footer' => 'Menu do Rodapé'
    ));
}

add_action('after_setup_theme', 'brand_persona_setup');