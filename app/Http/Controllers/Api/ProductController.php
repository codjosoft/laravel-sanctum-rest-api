<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Cache;
// use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;


//define single resource
// use App\Http\Resources\Product as ProductResource;


class ProductController extends Controller
{
    public function index()
    {
       
       
            return $value = Cache::remember('products', 60, function () {
            $products =  ProductResource::collection(Product::all());
        
                return $products;
        });  

    }

   



}

     

