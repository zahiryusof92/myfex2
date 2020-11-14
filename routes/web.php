<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BrandRightsController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AmendmentController;
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

    Route::resource('profile', ProfileController::class)->only(['index', 'edit', 'show']);
    Route::resource('user', UserController::class)->only(['index', 'show']);
    Route::resource('company', CompanyController::class)->only(['index', 'show']);
    Route::resource('brandRights', BrandRightsController::class)->only(['index', 'create', 'show']);
    Route::resource('application', ApplicationController::class)->only(['index', 'store', 'show']);
    Route::resource('amendment', AmendmentController::class)->only(['index', 'create', 'store', 'show']);

    Route::get('application/franchise/create', [ApplicationController::class, 'franchise'])->name('application.franchise.create');
    Route::get('application/franchisee/create', [ApplicationController::class, 'franchisee'])->name('application.franchisee.create');
    Route::post('application/getFranchiseType', [ApplicationController::class, 'getFranchiseType'])->name('application.getFranchiseType');

    Route::get('application/{id}/companyInformation', [ApplicationController::class, 'companyInformation'])->name('application.companyInformation');
    Route::get('application/{id}/capitalEquity', [ApplicationController::class, 'capitalEquity'])->name('application.capitalEquity');
    Route::get('application/{id}/businessOperation', [ApplicationController::class, 'businessOperation'])->name('application.businessOperation');
    Route::get('application/{id}/businessInformation', [ApplicationController::class, 'businessInformation'])->name('application.businessInformation');
    Route::get('application/{id}/franchiseeObligation', [ApplicationController::class, 'franchiseeObligation'])->name('application.franchiseeObligation');
    Route::get('application/{id}/franchisorObligation', [ApplicationController::class, 'franchisorObligation'])->name('application.franchisorObligation');
    Route::get('application/{id}/rightsObligation', [ApplicationController::class, 'rightsObligation'])->name('application.rightsObligation');
    Route::get('application/{id}/financeReport', [ApplicationController::class, 'financeReport'])->name('application.financeReport');
    Route::get('application/{id}/startingCost', [ApplicationController::class, 'startingCost'])->name('application.startingCost');
    Route::get('application/{id}/filesUpload', [ApplicationController::class, 'filesUpload'])->name('application.filesUpload');
    Route::get('application/{id}/declaration', [ApplicationController::class, 'declaration'])->name('application.declaration');
    Route::get('application/{id}/franchiseeInformation', [ApplicationController::class, 'franchiseeInformation'])->name('application.franchiseeInformation');
        
    Route::post('amendment/getFranchiseType', [AmendmentController::class, 'getFranchiseType'])->name('amendment.getFranchiseType');
    
    Route::get('amendment/{id}/companyInformation', [AmendmentController::class, 'companyInformation'])->name('amendment.companyInformation');
    Route::get('amendment/{id}/capitalEquity', [AmendmentController::class, 'capitalEquity'])->name('amendment.capitalEquity');
    Route::get('amendment/{id}/businessOperation', [AmendmentController::class, 'businessOperation'])->name('amendment.businessOperation');
    Route::get('amendment/{id}/businessInformation', [AmendmentController::class, 'businessInformation'])->name('amendment.businessInformation');
    Route::get('amendment/{id}/franchiseeObligation', [AmendmentController::class, 'franchiseeObligation'])->name('amendment.franchiseeObligation');
    Route::get('amendment/{id}/franchisorObligation', [AmendmentController::class, 'franchisorObligation'])->name('amendment.franchisorObligation');
    Route::get('amendment/{id}/rightsObligation', [AmendmentController::class, 'rightsObligation'])->name('amendment.rightsObligation');
    Route::get('amendment/{id}/financeReport', [AmendmentController::class, 'financeReport'])->name('amendment.financeReport');
    Route::get('amendment/{id}/startingCost', [AmendmentController::class, 'startingCost'])->name('amendment.startingCost');
    Route::get('amendment/{id}/filesUpload', [AmendmentController::class, 'filesUpload'])->name('amendment.filesUpload');
    Route::get('amendment/{id}/declaration', [AmendmentController::class, 'declaration'])->name('amendment.declaration');
    Route::get('amendment/{id}/franchiseeInformation', [AmendmentController::class, 'franchiseeInformation'])->name('amendment.franchiseeInformation');
        
    Route::post('brandRights/getRegNo', [BrandRightsController::class, 'getRegNo'])->name('brandRights.getRegNo');

    Route::middleware('superadmin')->group(function () {
        Route::get('/page/{page}', [LexaController::class, 'index']);
    });
});


