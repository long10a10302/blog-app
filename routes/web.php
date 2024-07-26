<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

Route::get('',[PagesController::class,'index']);
// Route::get(
//     'products',
//     [
//         ProductsController::class,
//         'index'
//     ]
// );


// Route::get('/products/{id}', [ProductsController::class, 'detail'])
//     ->where('id', '[0-9]+'); // Corrected the regex to match digits from 0 to 9

// Route::get(
//     'about',
//     [
//         ProductsController::class,
//         'about'
//     ]
// );

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/users', function () {
//     return 'This is the user page';
// });

// Route::get('/foods', function () {
//     return ['sushi','sashimi','tofu'];
// });

// Route::get('/aboutMe', function () {
//     return response() -> json([
//         'name' => 'Nguyen Duc Hoang',
//         'email' => 'nguyenvietlongvnua@gmail.com'
//     ]);
// });

// Route::get('/something', function () {
//     return redirect('/foods');
// });