<?php

use App\Http\Controllers\VehicleController;
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
Route::controller(VehicleController::class)->group(function()
{
    Route::get('calculates', 'show')->name('show');
    Route::post('calculate', 'calculatePrice')->name('calculatePrice');
});

route::fallback(function() 
{
    return redirect()->route('show');
});