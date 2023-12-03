<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'organization_name',
        'position',
        'startDate',
        'startEnglishDate',
        'endDate',
        'endEnglishDate',
        'jobDescription',
        'doctor_id'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctors->id');
    }
}
