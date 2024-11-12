<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
}) ->name('index');

/*Route::get('/products', function () {
    return view('products_index');
}) ->name('products');
*/

/*
Route::get('/indexProducts',[App\Http\Controllers\ProductController::class,'index'])->name('products');



Route::get('/createProducts',[App\Http\Controllers\ProductController::class,'create'])->name('pcreate');


Route::get('/storeProducts/{store}',[App\Http\Controllers\ProductController::class,'store'])->name('pstore');

Route::get('/editProducts/{product}/edit',[App\Http\Controllers\ProductController::class,'edit'])->name('pedit');

Route::get('/updateProducts/{product}',[App\Http\Controllers\ProductController::class,'update'])->name('pupdate');

Route::get('/showProducts/{product}',[App\Http\Controllers\ProductController::class,'show'])->name('pshow');

Route::delete('/destroyProducs/{product}',App\Http\Controllers\ProductController::class,'destroy')->name('pdestroy');

*/



/*
Route::get('/indexProducts', [App\Http\Controllers\ProductController::class, 'index'])-> name('products');

Route::get('/createProducts', [App\Http\Controllers\ProductController::class, 'create'])-> name('pcreate');

Route::get('/storeProducts/{store}', [App\Http\Controllers\ProductController::class, 'store'])-> name('psotre');

Route::get('/updateProducts/{product}', [App\Http\Controllers\ProductController::class, 'update'])-> name('pupdate');

Route::get('/destroyProducts{$product}', [App\Http\Controllers\ProductController::class, 'destroy'])-> name('pdestroy');

Route::get('/editProducts/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])-> name('pedit');

Route::get('/showProducts/{product}', [App\Http\Controllers\ProductController::class, 'show'])-> name('pshow');
*/
Route::resource('/products',App\Http\Controllers\ProductController::class);

Route::resource('/brands',App\Http\Controllers\BrandController::class);

Route::get('/clients', function () {
    return view('clients_index');
}) ->name('clients');


Route::get('/sales', function () {
    return view('sales_index');
}) ->name('sales');



















