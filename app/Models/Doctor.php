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
        'Contact',
        'Province',
        'District',
        'Municipality',
        'Ward',
        'tole',
        'dob',
        'english_dob',
        'gender',
        'specialization',
        'Department',
        'image',        
        'user_id'
    ];
    public function user():HasOne
    {
        return $this->hasOne(User::class);
    }
    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }
    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class);
    }
}
