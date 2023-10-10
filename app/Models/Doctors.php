<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    protected $fillable = [
        'license_no',
        'First Name',
        'Last Name',
        'Contact',
        'Province',
        'District',
        'Municipality',
        'Ward',
        'tole',
        'Department',
        'gender',
        'specialization',
        'photo',
        'Date Of Birth',
        'user_id'
    ];
}
