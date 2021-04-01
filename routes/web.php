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

Route::get('/', function () {
    return view('cing_fong_shipping_reoord');
});

Route::get('shipping_reoord', function () {
    return view('cing_fong_shipping_reoord');
});

Route::get('user_client_info', function () {
    return view('cing_fong_user');
});

// Route::get('company_client_info', function () {
//     return view('cing_fong_company',);
// });

Route::get('company_client_info', function () {
    return view('cing_fong_company');
});
Route::get('company_client_info', "Controller@index");

Route::get('user_info', function () {
    return view('cing_fong_user_info');
});
Route::get('company_info', function () {
    return view('cing_fong_company_info');
});

Route::get('shipping_edit', function () {
    return view('cing_fong_shipping_edit');
});
