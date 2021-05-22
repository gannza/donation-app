<?php

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pay-with-momo', function () {
    return view('momo');
});
Route::get('/pay-with-card', function () {
    return view('card');
});

Route::get('/donation-success/{id}', function ($id) {
    return view('donation-success')->with('id',$id);
});
Route::get('/donation-failed/{id}', function ($id) {
    return view('donation-failed')->with('id',$id);
});

//payments
Route::post('payments', 'PaymentController@store');

Auth::routes();
