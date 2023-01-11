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
        wp_enqueue_style('title_switcher_styles', TITLE_SWITCHER_URL . 'assets/styles.css');
        wp_enqueue_script('title_switcher_scripts', TITLE_SWITCHER_URL . 'assets/scripts.js');
    }

    public function adminMenu() 
    {
        add_menu_page('Title Switcher', "Title Switcher", 'manage_options', 'title_switcher_menu', array(), 'dashicons-laptop', 8);
    }
}
