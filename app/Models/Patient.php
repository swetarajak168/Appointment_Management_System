<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
   
    protected $fillable =[
        'name',
        'address',
        'email',
        'contact',
        'gender',
        'date_of_birth',
        'date_of_birth_ad',
    ];
    public function booking(){
        return $this->hasMany(Booking::class);
    }

}
   
