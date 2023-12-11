<?php

use App\Models\Department;

class DepartmentHelper{
    public function departmentList()
    {
        $department = Department::orderBy('id','DESC')->pluck('name','id');
        return $department;
    }
}
