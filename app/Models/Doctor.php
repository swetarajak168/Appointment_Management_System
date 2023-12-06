<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Doctor extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;
    protected $fillable = [
        'license_no',
        'fname',  
        'lname',
        'email',
        'password',      
        'contact',
        'province',
        'district',
        'municipality',
        'ward',
        'tole',
        'dob',
        'english_dob',
        'gender',
        'specialization',
        'department',
        'image',        
        'user_id',
        'department_id'
    ];
    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }
    public function education()
    {
        return $this->hasMany(Education::class);
    }
    public function experience(){
        return $this->hasMany(Experience::class);
    }

    public function schedule(){
        return $this->hasMany(Schedule::class);
    }
    public function booking(){
        return $this->hasMany(Booking::class);
    }

   public function department(){
    return  $this->belongsTo(Department::class);
   }
}
