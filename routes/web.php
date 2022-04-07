<?php

use App\Events\test;
use App\Http\Controllers\TestEventController;
use App\Http\Controllers\HomeController;
use App\Models\account;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    // event(new \App\Events\test());
    // event(new \App\Events\test('Hải', account::find(4))); // Truyền tham số vào trong () của event, lọc theo bảng dữ liệu trong database account
    \App\Events\test::dispatch('Hải', account::find(4)); // có thể sử dụng class dispatch thay cho câu bên trên
    return view('welcome');
});

Route::resource(
    'test', TestEventController::class
    // '/home' => HomeController::class
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/send-mail', [\App\Http\Controllers\SendEmailController::class, 'getSendEmail'])->name('getSendEmail');
 
// Route::post('/send-mail', [\App\Http\Controllers\SendEmailController::class, 'postSendEmail'])->name('postSendEmail');
Route::get('/send-mail', [\App\Http\Controllers\SendMailController::class, 'GetSendEmail'])->name('GetSendEmail');
// Route::post('/send-mail', [\App\Http\Controllers\SendMailController::class, 'PostSendEmail'])->name('PostSendEmail');

