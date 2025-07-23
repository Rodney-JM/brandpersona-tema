<?php

//Enfileirando CSS e JS
function brand_persona_enqueue_scripts()
{
    //Css imports
    $styles = [
        'main'   => '/assets/styles/main.css',
        'colors' => '/assets/styles/base/colors.css',
        'fonts'  => '/assets/styles/base/fonts.css',
        'reset' => '/assets/styles/base/reset.css',
        'header' => '/assets/styles/layouts/header.css',
        'footer' => '/assets/styles/layouts/footer.css',
        'section2' => '/assets/styles/layouts/section2.css',
        'section3' => '/assets/styles/layouts/section3.css',
        'section4' => '/assets/styles/layouts/section4.css',
        'section5' => '/assets/styles/layouts/section5.css',
        'section6' => '/assets/styles/layouts/section6.css',
        'section7' => '/assets/styles/layouts/section7.css',
        'section8' => '/assets/styles/layouts/section8.css',
        'section9' => '/assets/styles/layouts/section9.css',
        'decoration-shape' => '/assets/styles/components/decoration-shape.css',
        'texts' => '/assets/styles/components/texts.css',
        'input' => '/assets/styles/components/input.css',
        'buttons' => '/assets/styles/components/buttons.css',
        'line-dotted' => '/assets/styles/components/line-dotted.css',
        'lines' => '/assets/styles/components/lines.css',
        'top-arrow'=> '/assets/styles/components/top-arrow.css'
    ];

    foreach ($styles as $handle => $path) {
        $uri = get_template_directory_uri() . $path;
        $file = get_template_directory() . $path;

        if (file_exists($file)) {
            wp_enqueue_style("brand-persona-$handle", $uri, [], filemtime($file));
        }
    }

    //fonts
    wp_enqueue_style('brandpersona-fonts', get_template_directory_uri() . '/assets/styles/base/fonts.css', [], filemtime(get_template_directory() . '/assets/styles/base/fonts.css'));

    //JS
    wp_enqueue_script(
        'brandpersona-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [], filemtime(get_template_directory() . '/assets/js/main.js'), true
    ); 
}

add_action('wp_enqueue_scripts', 'brand_persona_enqueue_scripts');

