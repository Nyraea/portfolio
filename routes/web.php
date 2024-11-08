<?php
use App\Http\Controllers\GuestController;
use App\Http\Controllers\VotersController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\VotesController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', [VotersController::class, 'index'])->name('voters.index');

Route::get('/candidates', [CandidatesController::class, 'index'])->name('candidates.index');

Route::get('/votes', [VotesController::class, 'index'])->name('votes.index');