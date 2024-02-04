<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
    
}
