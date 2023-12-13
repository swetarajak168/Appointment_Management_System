<?php
namespace App\Helpers;
use App\Models\Doctor;
use App\Models\Province;


class ProvinceHelper {

        public function ProvinceList(){
                $province = Province::pluck('province_name','id');
                return $province;
        }
}
