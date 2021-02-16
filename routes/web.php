<?php
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\NombreMailable;
use App\Http\Controllers\examenControlller;
use App\Http\Controllers\mailControlller;
use App\Http\Controllers\seedersController;
use Database\Seeders\tablaexamenseeder;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/home', function () {
    return view('home');
});
    
Route::get('/migraciones', examenControlller::class);
Route::get('/seeders', seedersController::class);
Route::get('/mail', mailControlller::class);
Route::post('/mail', [mailControlller::class,'EnviarMail']);

        




