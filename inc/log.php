<?php

/**
 * Helper function. Log debug info.
 *
 * @param string $title
 * @param string $body
 * @param bool $parseJSON
 * @param bool $log
 * @param bool $export_var
 * @return bool
 *
 * v20.07.2022
 */
function ___debug_log($title = 'Title', $body = 'Message', $parseJSON = false, $log = true, $export_var = false) {
    if ($log) {
        $title		= (is_string($title)) ? $title : 'The Title';
        $delimiter 	= '=================================================================================';
        $backtrace	= debug_backtrace();
        $caller 	= array_shift($backtrace);
        $file 		= $caller['file'];
        $line 		= $caller['line'];

        $type		= sprintf('Type: %s', gettype($body));

        if ($parseJSON) {
            $body = json_decode($body, true);
        }

        if ($export_var) {
            $message = var_export($body, true);
        } else {
            $message = print_r($body, true);
        }

        error_log( "$file. Line: $line \n" . "*** $title: *** \n" . "$type \n" . "$message \n" . "$delimiter \n");
    }

    return false;
}

/**
 * @param string $data
 * @param bool $isDump
 * @return bool
 */
function ___debug_print($data = '', $isDump = false) {
    if ($isDump) {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    } else {
        echo '<pre>';
        echo sprintf('<small>Type: </small><b>%s</b><br>', gettype($data));
        print_r($data);
        echo '</pre>';
    }

    return false;
}

/* TODO: Disable! */
//add_action('wp_footer', '___debug_what_template');

/**
 * CHeck what template is being in use
 */
function ___debug_what_template() {
    if ( is_super_admin() || true) {
        global $template;

        ___debug_print($template);
    }
}
