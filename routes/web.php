<?php
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\NombreMailable;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', function () {
    $correo = new NombreMailable();
    Mail::to('destinatario@correo.com')->send($correo);
    return 'Mensaje enviado';
});

Route::get('/viewprueba', function () {
    return view('mailview');
});

Route::get('/view2/{name}', function($name){
    return view ('view2',['name'=>$name]);
});


