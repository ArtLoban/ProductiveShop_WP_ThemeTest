<?php

/**
 * @param $flexible_content
 */
function ps_get_acf_flexible_content_template($flexible_content) {
    $flexible_content = (isset($flexible_content) && is_array($flexible_content)) ? $flexible_content : [];

    if (count($flexible_content)) {
        foreach ($flexible_content as $flexible_content_data) {
            if (isset($flexible_content_data['acf_fc_layout'])) {
                switch ($flexible_content_data['acf_fc_layout']) {
                    case 'case_study':
                        get_template_part('template-parts/acf-flexible/content', 'case_study', $flexible_content_data);
                        break;
                    case 'featured_posts':
                        get_template_part('template-parts/acf-flexible/content', 'featured_posts', $flexible_content_data);
                        break;
                    case 'socials':
                        get_template_part('template-parts/acf-flexible/content', 'socials', $flexible_content_data);
                        break;
                    default:
                        echo '';
                }
            }
        }
    }
}

function ps_get_svg_linkedin() {
    get_template_part('template-parts/svg/svg', 'linkedin');
}
function ps_get_svg_mail() {
    get_template_part('template-parts/svg/svg', 'mail');
}
function ps_get_svg_facebook() {
    get_template_part('template-parts/svg/svg', 'facebook');
}
