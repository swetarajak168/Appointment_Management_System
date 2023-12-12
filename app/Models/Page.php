<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Page extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'status'
    ];

    protected $casts = [
        'title' => 'json',
        'content' => 'json',
    ];

    public function menu(){
        return $this->hasMany(Menu::class, 'page_id');
    }
}
