<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('products')->group(function(){
    Route::get('/' , [ProductsController::class, 'index'])->name('products.index');
    Route::delete('/delete' , [ProductsController::class, 'delete'])->name('product.delete');
});