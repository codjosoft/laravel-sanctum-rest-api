<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthController;
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

//Public routes
Route::post('/register', [UserAuthController::class, 'register']);
Route::get('/product', [ProductController::class, 'index'])->name('index');
Route::get('product/search/{name}', [ProductController::class, 'search']);
Route::get('product/{id}', [ProductController::class, 'show']);


/*
* protected routes
*/
//route middleware auth sanctum
Route::group(['middleware' => 'auth:sanctum'], function () {
    //route middleware auth
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::put('product/{id}', [ProductController::class, 'update']);
    Route::delete('product/{id}', [ProductController::class, 'destroy']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



/* route resource for product 
* resource product routes
*/ 
//Route::resource('product', ProductController::class);



/* 
Route::prefix('/product')->group( function () {
  
    });
  */