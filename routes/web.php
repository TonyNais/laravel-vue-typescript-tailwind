<?php

use App\Http\Controllers\HomeController;
use http\Client\Request;
use Illuminate\Support\Facades\Route;
use Subfission\Cas\Facades\Cas;

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




Route::group(['middleware' => ['cas.auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

//    Route::get('/', 'HomeController@index');
    Route::get('/logout', [HomeController::class,'logout']);

//    Route::resources([
//        'photos' => PhotoController::class,
//        'posts' => PostController::class,
//    ]);
});
