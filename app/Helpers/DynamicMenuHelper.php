<?php
namespace App\Helpers;

use App\Models\Menu;
use App\Models\Module;
use App\Models\Page;


class DynamicMenuHelper
{

    public function menuList()
    {
        $modules = Menu::orderBy('Order')->get();
        return $modules;
    }
   
    
}