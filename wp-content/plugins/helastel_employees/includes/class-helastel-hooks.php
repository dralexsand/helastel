<?php

function hs_form($atts)
{
    if (!isset($atts['form'])) return '';
    if (!is_numeric($atts['form'])) return '';
    if (!in_array($atts['form'], [1, 2, 3, 4, 5])) return '';

    $content = 'New Form#'.$atts['form'];

    require_once HELASTEL_DIR.'includes/class-helastel-process.php';

    $hsProcess = new HelastelProcess($atts['form']);

    return 'Here is hs_form: ' . $hsProcess->process();
}

add_shortcode('hs_form', 'hs_form');
