<?php
namespace App\Helpers;

use App\Models\Menu;
use App\Models\Module;
use App\Models\Page;


class ParentMenuHelper
{

    public function List()
    {
        $modules = Menu::orderBy('Order')->pluck('Name','id');
        return $modules;
    }
   
    
}