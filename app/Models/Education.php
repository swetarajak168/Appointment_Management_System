<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'Level',
        'Institution',
        'CompletionDate',
        'Board',
        'Marks',
        'doctor_id'
    ];
}
