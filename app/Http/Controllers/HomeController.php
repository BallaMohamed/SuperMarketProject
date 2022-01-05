<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Categroy;
use App\Models\Product;
use App\Models\Company;
class HomeController extends Controller
{
   
    public function homePage()
    {
        return view('home' , [
             "product"    => Product::count() ,
             "categroy"   => Categroy::count() ,
             "client"     => Client::count() ,
             "company"    => Company::count()
            ]);
    }
}
