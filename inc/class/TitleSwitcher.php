<?php

class TitleSwitcher
{
    public function register()
    {
        add_filter('document_title_parts', array($this, 'my_custom_title'));
    }
    
    public function my_custom_title( $title ) {
        // $title is an array of title parts, including one called `title`

        $title['title'] = 'My new title';

        return $title;
    }
}
