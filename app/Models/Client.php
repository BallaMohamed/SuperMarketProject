<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ["customer_name" , "customer_phone"];

    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
}
