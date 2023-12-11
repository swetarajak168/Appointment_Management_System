<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Type',
        'Order',
        'module_id',
        'page_id',
        'external_link',
        'parent_id',
        'status'
    ];
    public function module(){
        return $this->hasMany(Module::class);
    }

    public function page(){
        return $this->hasMany(Page::class);
    }
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

}
