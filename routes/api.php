<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/company', [App\Http\Controllers\Api\Company\GetListAllCompaniesController::class, '__invoke']);
Route::post('/company', [App\Http\Controllers\Api\Company\PostCreateCompanyController::class, '__invoke']);
Route::patch('/company/{company}', [App\Http\Controllers\Api\Company\PatchUpdateStatusCompanyController::class, '__invoke']);
