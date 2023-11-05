<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'level',
        'institution',
        'completionDate',
        'board',
        'marks',
        'doctor_id'
    ];
    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctors->id');
    }
}
