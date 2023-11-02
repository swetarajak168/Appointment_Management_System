<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'Organization Name',
        'Position',
        'StartDate',
        'EndDate',
        'JobDescription',
        'doctor_id'
    ];
}
