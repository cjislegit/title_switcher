<?php

/**
* Plugin Name: Title Tag Switcher
* Description: Plugin that lets you update your pages tiltle tags.
* Author: CJR
* Author URL: cjramirez.tech
* Version: 1.0.0
* Text Domain: title_switcher
*/

//Exists if accessed directly
defined('ABSPATH') or die('Get out of here!');

//Constatns should have a unique name so they don't interfere with other plugins
//Sets the plugin path constant to the path of of the plugin
define('TITLE_SWITCHER_PATH', plugin_dir_path(__FILE__));

//Sets the plugin url contsant to the url of the plugin
define('TITLE_SWITCHER_URL', plugin_dir_url(__FILE__));

//Sets the pligin const to the name of the plugin
define('TITLE_SWITCHER_SUBS', plugin_basename(__FILE__));

//Load Classes
require_once(TITLE_SWITCHER_PATH . 'inc/class/TitleSwitcherEnqueue.php');
require_once(TITLE_SWITCHER_PATH . 'inc/class/TitleSwitcher.php');

//Create new instance of class
$newEnqueue = new TitleSwitcherEnqueue();
$newTitleSwitcher = new TitleSwitcher();

//Call register method
$newEnqueue->register();
$newTitleSwitcher->register();

//Set plublished_pages to array of active page ids
define('PUBLISHED_PAGES', $newTitleSwitcher->get_all_pages());