<?php

class TitleSwitcherEnqueue 
{
    public function register()
    {
        //Calls the enqueue function
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));

        //Calls the adminMenu
        add_action('admin_menu', array($this, 'adminMenu'));
    }

    public function enqueue()
    {

        wp_enqueue_style('title_switcher_bootstrap_styles', TITLE_SWITCHER_URL . 'assets/bootstrap.min.css');
        wp_enqueue_script('title_switcher_bootstrap_scripts', TITLE_SWITCHER_URL . 'assets/bootstrap.bundle.min.js');
        wp_enqueue_style('title_switcher_styles', TITLE_SWITCHER_URL . 'assets/styles.css');
        wp_enqueue_script('title_switcher_scripts', TITLE_SWITCHER_URL . 'assets/scripts.js');
    }

    public function adminMenu() 
    {
        add_menu_page('Title Switcher', "Title Switcher", 'manage_options', 'title_switcher_menu', array($this, 'adminPage'), 'dashicons-laptop', 8);
    }

    public function adminPage()
    {
        require_once(TITLE_SWITCHER_PATH . 'templates/title_switcher_menu.php');
    }

    public function create_db() 
    {
        global $wpdb;

        $titleTagTableName = $wpdb->prefix . "title_switcher";

        $titleTagTable = $wpdb->get_results("SELECT * FROM $titleTagTableName");

        if (!$titleTagTable) {
            $charset_collate = $wpdb->get_charset_collate();
            
            $sql = "CREATE TABLE $titleTagTableName (
                page_id int NOT NULL,
                title_tag text,
                PRIMARY KEY (page_id)
            ) $charset_collate;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }
    }
}
