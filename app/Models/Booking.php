<?php

namespace App\Models;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory;   
    use SoftDeletes;

    protected $fillable = [
        'book_date_bs',
        'book_date_ad',
        'remarks',
        'start_time',
        'end_time' ,   
        'status',
        'patients_id',
        'doctor_id',
        'schedule_id'
    ];
    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }

    public function patient(){
        return $this->belongsTo(Patient::class,'patients_id','id');
    }
    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
}
