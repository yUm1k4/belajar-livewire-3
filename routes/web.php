<?php

use App\Livewire\DataBinding;
use App\Livewire\LearnValidation;
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

Route::get('/', function () {
    return view('welcome');
});

// grouping
Route::prefix('learn')->group(function () {
    // Episode 4 - Data Binding
    Route::get('/data-binding', DataBinding::class);
    // Episode 5 - Validation
    Route::get('/validation', LearnValidation::class);
});
