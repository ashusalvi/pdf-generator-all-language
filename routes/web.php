<?php

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

Route::get('/bengali-pdf','Pdf\BengaliController@generate_pdf');
Route::get('/gujarati-pdf','Pdf\GujaratController@generate_pdf');
Route::get('/kannada-pdf','Pdf\KannadaController@generate_pdf');
Route::get('/malayalam-pdf','Pdf\MalayalamController@generate_pdf');
Route::get('/marathi-pdf','Pdf\MarathiController@generate_pdf');
Route::get('/punjabi-pdf','Pdf\PunjabiController@generate_pdf');
Route::get('/tamil-pdf','Pdf\TamilController@generate_pdf');
Route::get('/telugu-pdf','Pdf\TeluguController@generate_pdf');