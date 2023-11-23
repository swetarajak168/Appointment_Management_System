<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
      'nepali_date',
      'english_date',
      'start_time',
      'end_time',
      'limit',
      'doctor_id',
      'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    
    public function booking(){
        return $this->hasMany(Booking::class,'schedule_id');
    }
}
