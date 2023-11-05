<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
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
        'user_id'
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function education()
    {
        return $this->hasMany(Education::class);
    }
    public function experience(){
        return $this->hasMany(Experience::class);
    }
}
