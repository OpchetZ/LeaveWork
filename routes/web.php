<?php

use App\Http\Controllers\employController;
use App\Http\Controllers\leaverequestController;
use App\Http\Controllers\leavetypeController;
use App\Http\Controllers\positionController;
use App\Http\Controllers\statusController;
use App\Models\position;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function (){
    Route::resource('position',positionController::class);
    Route::resource('status',statusController::class);
    Route::resource('employ',employController::class);
    Route::resource('leavetype',leavetypeController::class);
    Route::resource('leaverequest', leaverequestController::class);
});

require __DIR__.'/auth.php';

// Route::resource('position', 'positionController');

// Route::resource('employ', 'employController');
// Route::resource('leavetype', 'leavetypeController');
// Route::resource('leaverequest', 'leaverequestController');