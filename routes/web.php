<?php
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuestController::class, 'index'])->name('guest');
Route::post('/register',[GuestController::class,'submitForm'])->name('registration.submit');
Route::get('/display',[GuestController::class,'display'])->name('display');