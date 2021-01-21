<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('store', function () {
//     return view('frontend.cing_fong');
// })->name('cing_fong');

Route::get('shipping_reoord', function () {
    return view('cing_fong_shipping_reoord');
});

Route::get('user', function () {
    return view('cing_fong_user');
});
Route::get('user_info', function () {
    return view('cing_fong_user_info');
});

Route::get('shipping_edit', function () {
    return view('cing_fong_shipping_edit');
});

