<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
Route::get('/home', 'WebController@obtenerBanner');

Route::get('/estudiantes', 'WebController@obtenerEstudiantes');

Route::get('/beats', function () {
	$template='layout.template-beats';
    return \View::make('website.page')
    ->with('template',$template);
});



Route::get('/libraries', function () {
	$template='layout.template-libraries';
    return \View::make('website.page')
    ->with('template',$template);
});

Route::get('/learningproduction', function () {
	$template='layout.template-learningproduction';
    return \View::make('website.page')
    ->with('template',$template);
});

Route::get('/contact', function () {
	$template='layout.template-contact';
    return \View::make('website.page')
    ->with('template',$template);
});



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
/*
    Route::get('/banner', function () {
    $template='administracion.banner';
    return \View::make('administracion.page')
    ->with('template',$template);
    });*/

    Route::get('/banner', 'WebController@obtenerBannerAdm');

    Route::post('/guardarBanner', [WebController::class,'guardarBannerAdm']);


    Route::get('/dashboard2', function () {
    $template='administracion.dashboard';
    return \View::make('administracion.page')
    ->with('template',$template);
    });


});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
