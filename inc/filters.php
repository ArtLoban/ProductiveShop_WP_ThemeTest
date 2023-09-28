<?php

// Set the display status of the admin bar. Show only if dev GET param is set
if (!isset($_GET['dev_bar'])) {
    add_filter('show_admin_bar', '__return_false');
}

add_action('ps_include_svg_linkedin', 'ps_get_svg_linkedin');
add_action('ps_include_svg_mail', 'ps_get_svg_mail');
add_action('ps_include_svg_facebook', 'ps_get_svg_facebook');
