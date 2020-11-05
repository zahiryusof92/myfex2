<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BrandRightsController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LexaController;

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



Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('landing');
    });
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::resources([
        'profile' => ProfileController::class,
        'user' => UserController::class,
        'company' => CompanyController::class,
        'brandRights' => BrandRightsController::class,
        'application' => ApplicationController::class,
    ]);

    Route::get('application/{id}/companyInformation', [ApplicationController::class, 'companyInformation'])->name('application.companyInformation');
    Route::get('application/{id}/capitalEquity', [ApplicationController::class, 'capitalEquity'])->name('application.capitalEquity');
    Route::get('application/{id}/businessOperation', [ApplicationController::class, 'businessOperation'])->name('application.businessOperation');
    Route::get('application/{id}/businessInformation', [ApplicationController::class, 'businessInformation'])->name('application.businessInformation');

    Route::post('brandRights/getRegNo', [BrandRightsController::class, 'getRegNo'])->name('brandRights.getRegNo');

    Route::middleware('superadmin')->group(function () {
        Route::get('/page/{page}', [LexaController::class, 'index']);
    });
});


