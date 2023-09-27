<?php

/**
 *  ACF Pro v6.1.1 Plugin setups
 * @see:    https://www.advancedcustomfields.com/resources/including-acf-within-a-plugin-or-theme/
 * @see:    https://www.advancedcustomfields.com/resources/local-json/
 */
if (!function_exists('ps_theme_include_acf')) {
    $acf_path = PRODUCTIVESHOP_DIR . '/inc/plugins/acf-pro/acf/acf.php';

    if (!file_exists($acf_path)) {
        return null;
    }

    /**
     * @see ps_theme_include_acf()
     */
    add_action('after_setup_theme', 'ps_theme_include_acf', 1);

    /**
     * ACF setup
     */
    function ps_theme_include_acf() {
        // Define path and URL to the ACF plugin.
        define( 'ACF_PRO_6_PATH', get_stylesheet_directory() . '/inc/plugins/acf-pro/acf/' );
        define( 'ACF_PRO_6_URL', get_stylesheet_directory_uri() . '/inc/plugins/acf-pro/acf/' );

        // Include the ACF plugin.
        include_once( ACF_PRO_6_PATH . 'acf.php' );

        // Customize the url setting to fix incorrect asset URLs.
        add_filter('acf/settings/url', 'my_acf_settings_url');
        function my_acf_settings_url( $url ) {
            return ACF_PRO_6_URL;
        }

        /**
         * (Optional) Hide the ACF admin menu item.
         * TODO: Make conditional logic using CONSTANT if don't want to show ACF Groups in admin for other users!
         */
        if (defined('ACF_HIDE_ADMIN_MENU_ITEM')) {
            add_filter('acf/settings/show_admin', '__return_false');
        }

        // When including the PRO plugin, hide the ACF Updates menu
        add_filter('acf/settings/show_updates', '__return_false', 100);

        /**
         * 5. Create JSON save point
         * https://www.advancedcustomfields.com/resources/local-json/
         */
        add_filter('acf/settings/save_json', function ($path) {
            // update path
            $path = get_stylesheet_directory() . '/inc/plugins/acf-pro/acf-json';

            return $path;
        });

        /* 6. Create a json load point */
        add_filter('acf/settings/load_json', function ($paths) {
            // remove original path (optional)
            unset($paths[0]);

            // append path
            $paths[] = get_stylesheet_directory() . '/inc/plugins/acf-pro/acf-json';

            return $paths;
        });

        /* `Site Options` Page */
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page([
                'page_title'    => __('Site Options', 'productiveshop'),
                'menu_title'    => __('Site Options', 'productiveshop'),
                'menu_slug'     => __('site-options', 'productiveshop'),
                'capability'	=> 'edit_posts',
                'redirect'		=> false
            ]);
        }

        /* Display default custom fields */
//        add_filter('acf/settings/remove_wp_meta_box', '__return_false');

        /* Enable the option show in rest */
//        add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );

        /* Enable the option edit in rest */
//        add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );
    }
}
