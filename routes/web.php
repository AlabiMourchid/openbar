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

Route::redirect('/accueil','/');

Route::get('/', [App\Http\Controllers\HomeController::class,'accueil'])-> name('accueil');
Route::get('/menu', [App\Http\Controllers\MenuController::class,'show'])-> name('menu');
Route::get('/evenements', [App\Http\Controllers\EvenementController::class,'show'])-> name('evenement');
Route::get('/evenements/details', [App\Http\Controllers\EvenementController::class,'details'])-> name('evenement-details');

Route::post('ticket/save',[App\Http\Controllers\TicketController::class, 'save'])->name('ticket_save');
Route::get('ticket/validation',[App\Http\Controllers\TicketController::class, 'validation'])->name('ticket_save');
