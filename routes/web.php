<?php

use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return redirect('/promo');
});
Route::get('/info', function () {
    return view('forms.info');
});

Route::resource('promo', PromoController::class)->only(['index']);
// Route::resource('user', UserController::class);
Route::resource('user', UserController::class)->only(['store']);
Route::get('user/create/{hash}', [UserController::class, 'create']);

Route::get('user/place/{id}', function($id){
    $massNumber = cookie('promoCode' , $id, 3);
    $value = sha1($massNumber);
    $massValue = cookie('promoValue', $value, 3);
    return redirect('/user/create/'.$value)->withCookie($massNumber)->withCookie($massValue);
})->where([
    'id'=>'[0-9]+'
]);
