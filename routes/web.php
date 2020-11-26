<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NoteController::class,'show']);
Route::post('create', [NoteController::class,'create']);
Route::delete('destroy/{id}', [NoteController::class,'destroy']);
Route::put('update/{id}', [NoteController::class,'update']);

