<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as AdminControllers;
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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'cars', 'as' => 'cars.'], function () {
        Route::get('/', [AdminControllers\CarController::class, 'index'])->name('index');

        Route::group(['prefix' => '{car}'], function () {
            Route::get('/', [AdminControllers\CarController::class, 'edit'])->name('edit');
            Route::post('/', [AdminControllers\CarController::class, 'store'])->name('store');
            Route::put('/', [AdminControllers\CarController::class, 'update'])->name('update');
        });
    });

    Route::group(['prefix' => 'models', 'as' => 'models.'], function () {
        Route::get('{markId}', [AdminControllers\CarController::class, 'getCarModelsByMark'])->name('byMark');
    });
});

Auth::routes();
