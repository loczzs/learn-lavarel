<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

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
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

// Route::get('/products', [
//     ProductsController::class,
//     'index' //index function of ProductsController
// ])->name('products');
// Route::get('/products/{productName}/{id}', [
//     ProductsController::class,
//     'detail' 
// ])->where([
//     'productName' => '[a-zA-Z0-9\s]+',
//     'id' => '[0-9]+'
// ]);


// Route::get('/', function () {
//     return view('home');
    
// });
// Route::get('/users', function () {
//     return 'this is user page';
    
// });
// Route::get('/foods', function () {
//     return ['sushi','sashimi','tofu'];
    
// });
// Route::get('/aboutMe', function () {
//     return response()->json([
//         'name' => 'Nguyen Duc Hoang',
//         'email' => 'sunlight4d@gmail.com'
//     ]); //response
// });
// //response another request = redirect
// // Route::, :: gọi là phương thức static
// Route::get('/something', function () {
//     return redirect('/foods');//redirect to foods
// });

