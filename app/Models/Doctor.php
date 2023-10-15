<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_no',
        'First Name',
        'Last Name',
        'Contact',
        'Province',
        'District',
        'Municipality',
        'Ward',
        'tole',
        'Department',
        'gender',
        'specialization',
        'photo',
        'Date Of Birth',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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
