<?php
namespace App\Helpers;

use App\Models\Department;

class DepartmentHelper{
    public function departmentList()
    {
        $department = Department::orderBy('id','DESC')->pluck('department_name','id');
        return $department;
    }
}
