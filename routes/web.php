<?php

use App\Http\Controllers\Backend\Master\MajorController;
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

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::get('/app/dashboard', function () {
        return view('backend.index');
    })->name('admin');

    Route::prefix('app')->group(function () {

        Route::prefix('master')->group(function () {

            Route::prefix('majors')->name('majors.')->group(function () {
                Route::controller(MajorController::class)->group(function () {
                    Route::get('/', 'index')->name('index');
                });
            });
        });
        
    });
});

Route::middleware(['auth:sanctum', 'verified', 'role:user'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
