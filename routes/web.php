<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TrashedController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class,'index'])->name('homepage');

Route::resource('notes',NoteController::class);

Route::get('trashed',[TrashedController::class,'index'])->name('trashed.index');
Route::put('trashed/{note}',[TrashedController::class,'update'])->name('trashed.update')->withTrashed();
Route::delete('/trashed/{note}',[TrashedController::class,'destroy'])->name('trashed.destroy')->withTrashed();

Auth::routes();
