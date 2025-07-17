<?php

//Enfileirando CSS e JS
function brand_persona_enqueue_scripts()
{
    //Css
    wp_enqueue_style(
        'brand-persona-style',
        get_template_directory_uri() . '/assets/styles/main.css', [], filemtime(get_template_directory() . '/assets/styles/main.css')
    );

    //JS
   /*  wp_enqueue_script(
        'brandpersona-script',
        get_template_directory_uri() . '/build/js/main.js',
        [], filemtime(get_template_directory() . '/build/js/main.js'), true
    ); */
}

add_action('wp_enqueue_scripts', 'brand_persona_enqueue_scripts');