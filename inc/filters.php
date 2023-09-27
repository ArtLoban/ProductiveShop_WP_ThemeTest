<?php

// Set the display status of the admin bar. Show only if dev GET param is set
if (!isset($_GET['dev_bar'])) {
    add_filter('show_admin_bar', '__return_false');
}
