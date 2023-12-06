<?php
namespace App\Helpers;
use App\Models\Doctor;


class DoctorHelper {

        public function doctorlist(){
                $doctor = Doctor::orderBy('id','DESC')->pluck('fname','id');
                return $doctor;
        }
}
