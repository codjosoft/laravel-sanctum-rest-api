<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//route middleware auth sanctum
Route::group(['middleware' => 'auth:sanctum'], function () {
    //route middleware auth
    Route::post('/search/{name}', [ProductController::class, 'search']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/product', [ProductController::class, 'index'])->name('index');

//route resource for product
Route::resource('product', ProductController::class);
 
Route::prefix('/product')->group( function () {
    Route::post('/store', [ProductController::class, 'store'])->name('store');
  
    }
  );
  