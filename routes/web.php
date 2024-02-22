<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\LoginController;
use App\Models\Candidates;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');

Route::get('/coba', function () {
    $user =  Candidates::find(1);
    $skill = ['1', '2', '3'];
    $user->skill_sets()->sync($skill);
});

Route::middleware('auth')->group(function () {

    Route::get('/apply', [LoginController::class, 'apply'])->name('apply');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::post('/store', [CandidateController::class, 'store'])->name('store');

});


