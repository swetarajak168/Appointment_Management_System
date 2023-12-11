<?php
namespace App\Helpers;
use App\Models\Page;


class PageHelper {

        public function pageList(){
            $pages = Page::orderBy('id', 'DESC')->get(['id', 'title']);
            $pageList = [];
    
            foreach ($pages as $page) {
                // Retrieve the English title from the JSON column
                $englishTitle = $page->title['en'];
    
                // Add the English title to the list with page id as the key
                $pageList[$page->id] = $englishTitle;
            }
    
            return $pageList;
        }
}