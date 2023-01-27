<?php

class TitleSwitcher
{
    function __construct() {
        function getTable() {
            global $wpdb;
            $titleTagTable = $wpdb->get_results("SELECT * FROM title_switcher");
            echo "test";
        }
    }

    public function register()
    {
        add_filter('document_title_parts', array($this, 'my_custom_title'));
    }
    
    public function my_custom_title( $title ) {
        // $title is an array of title parts, including one called `title`

        $title['title'] = 'My new title';

        return $title;
    }

    public function get_all_pages() {
        $pageIds = get_all_page_ids();
        $publishedIds = [];

        foreach ($pageIds as $pageId) {
            if (get_post_status($pageId) === 'publish') {
                $publishedIds[] = $pageId;
            }
        }
        return $publishedIds;
    }
}
