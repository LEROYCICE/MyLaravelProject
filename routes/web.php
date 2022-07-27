<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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




Route::get('/' , [ContactController::class , 'create']) ; 
Route::get('/message', [ContactController::class , 'index']) ; 
Route::post('/message', [AuthController::class , 'store']) -> name('auth.store') ;
Route::post('/', [ContactController::class ,'store'])->name('contact.store') ;
Route::get('/access' , [AuthController::class , 'AuthCreate']) ;
