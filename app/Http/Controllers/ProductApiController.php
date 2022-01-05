<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categroy;
class ProductApiController extends Controller
{
    public function getProducts()
    {
      return Product::all();
    }

    public function getProductsDepentOnCategory($name)
    {
      $category = Categroy::where('name' , $name)->get();
      return $category->pluck("products");
    }

    public function getCategory()
    {
      return Categroy::all();
    }
}
