<?php
namespace App\Helpers;
use App\Models\Module;


class ModuleHelper {

        public function moduleList(){
                $module = Module::orderBy('id','DESC')->pluck('Name','id');
                return $module;
        }
}