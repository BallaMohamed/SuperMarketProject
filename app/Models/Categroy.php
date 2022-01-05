<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categroy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'company_id' ,
    ];

   public function company()
   {
       return $this->belongsTo(Company::class);
   }

   public function products()
   {
       return $this->hasMany(Product::class);
   }
}
