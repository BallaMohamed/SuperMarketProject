<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone' ,
        'obserive',
    ];

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function categroies()
    {
        return $this->hasMany(Categroy::class);
    }

}
