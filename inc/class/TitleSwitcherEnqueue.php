<?php

class TitleSwitcherEnqueue 
{
    public function register()
    {
        //Calls the enqueue function
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {
        wp_enqueue_style('title_switcher_styles', TITLE_SWITCHER_URL . 'assets/styles.css');
        wp_enqueue_script('title_switcher_scripts', TITLE_SWITCHER_URL . 'assets/scripts.js');
    }
}
