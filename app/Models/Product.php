<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'categroy_id' ,
        'price1',
        'price2' ,
        'amount' ,
        'image'
    ];

    public function categroy()
    {
        return $this->belongsTo(Categroy::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
