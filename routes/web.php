<?php

use App\Http\Controllers\Api\emailcontroller;
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
    return view('hello');
});

Route::get('composemail', [emailcontroller::class, 'index'])->name('composemail');
Route::post('sendmail', [emailcontroller::class, 'mailsend'])->name('sendmail');