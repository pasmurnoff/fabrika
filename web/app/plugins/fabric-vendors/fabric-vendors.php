<?php
/**
 * Plugin Name: Fabric vendors
 * Plugin URI: https://www.megabomba.net/wp-plugins/fv/
 * Description: Fabric vendors
 * Version: 1.0
 * Author: Roman Hnatko
 * Author URI: https://www.megabomba.net
 */
defined( 'ABSPATH' ) or die();

/**
 *
 */
define('FV_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('FV_PLUGIN_DIR_URL', plugin_dir_url(__FILE__));
add_action('init','fe_initialize');

function fe_initialize() {
    add_menu_page(
        'Фабрики',
        'Фабрики',
        'manage_options',
        'fabric-vendors',
        'fe_show_index_page',
        'dashicons-media-document',
        64
    );
}
function fe_show_index_page() {
    global $wpdb;
    if (isset($_GET['delete_fabric'])) {

        $wpdb->delete('fv_vendors', ['id' => $_GET['delete_fabric']]);
        wp_safe_redirect( get_admin_url() . 'admin.php?page=fabric-vendors&status=fabric_deleted' );
        exit;
    }
    if (isset($_GET['delete_manager'])) {

        $wpdb->delete('fv_contacts', ['id' => $_GET['delete_manager']]);
        wp_safe_redirect( get_admin_url() . 'admin.php?page=fabric-vendors&status=manager_deleted' );
        exit;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['add_fabric'])) {
            $args = [
                'name' => FILTER_SANITIZE_STRING,
                'email' => FILTER_SANITIZE_EMAIL
            ];

            $fabric = filter_var_array($_POST['fabric'], $args);
            $wpdb->insert('fv_vendors', $fabric);
            wp_safe_redirect( get_admin_url() . 'admin.php?page=fabric-vendors&status=fabric_added' );
            exit;
        }
        if (isset($_POST['add_manager'])) {
            $args = [
                'name' => FILTER_SANITIZE_STRING,
                'contact' => FILTER_SANITIZE_STRING,
                'email' => FILTER_SANITIZE_EMAIL
            ];

            $manager = filter_var_array($_POST['manager'], $args);


            $result = $wpdb->insert('fv_contacts', $manager);

            wp_safe_redirect( get_admin_url() . 'admin.php?page=fabric-vendors&status=manager_added' );
            exit;
        }

        // handling data save

    }
    $fabrics = $wpdb->get_results('SELECT * FROM fv_vendors');
    $managers = $wpdb->get_results('SELECT * FROM fv_contacts');

    require FV_PLUGIN_DIR . '/templates/index.php';
}
/**
 * showing main plugin page
 */


/**
 *
 */

function fv_activation() {
    global $wpdb;
    $sql = '
        CREATE TABLE IF NOT EXISTS `fv_vendors` (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
            name TEXT NOT NULL,
            email VARCHAR(128) NOT NULL
        );
    ';
    $wpdb->query($sql);
    $sql = '
        CREATE TABLE IF NOT EXISTS `fv_contacts` (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
            name TEXT NOT NULL,
            email VARCHAR(128) NOT NULL,
            contact TEXT  NULL
        );
    ';

    $wpdb->query($sql);

}
register_activation_hook(__FILE__, 'fv_activation');

/**
 *
 */
function fv_deactivation() {

}
register_deactivation_hook(__FILE__, 'fv_deactivation');