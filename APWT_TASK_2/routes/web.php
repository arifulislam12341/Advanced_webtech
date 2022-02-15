<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\projectcontroller;
use App\http\controllers\Studentcontroller;
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
    return view('homepage');
});
Route::get('/home', [projectcontroller::class,'homepage'])->name('home');
Route::get('/product', [projectcontroller::class,'product'])->name('product');

Route::get('/ourteams', [projectcontroller::class,'ourteams'])->name('ourteams');
Route::get('/aboutus', [projectcontroller::class,'aboutus'])->name('aboutus');

Route::get('/contact', [projectcontroller::class,'contact'])->name('contact');
Route::post('/contactus', [projectcontroller::class,'contactus'])->name('contactus');

Route::get('/registration',[studentController::class, 'registration'])->name('registration');

Route::post('/registration',[studentController::class, 'registrationSubmit'])->name('registrationSubmit');
Route::get('/login',[studentController::class, 'login'])->name('login');

Route::post('/login',[studentController::class, 'loginSubmit'])->name('loginSubmit');