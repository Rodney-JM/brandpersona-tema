<?php

// Theme functions here

// Theme functions here

//Ativando recursos

require_once get_template_directory() . "/inc/core/setup.php";

//CSS e JS
require_once get_template_directory() . "/inc/enqueue.php";

function asset($path = '')
{
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}