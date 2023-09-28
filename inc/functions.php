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
                    default:
                        echo '';
                }
            }
        }
    }
}
