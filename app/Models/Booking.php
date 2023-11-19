<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;   
    protected $fillable = [
        'book_date_bs',
        'book_date_ad',
        'remarks',
        'start_time',
        'end_time' ,   
        'status',
        'patients_id',
        'doctor_id'
    ];
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
