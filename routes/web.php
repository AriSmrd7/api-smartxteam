<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\smartsheet\SheetsController;

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

Route::name('smartsheet-api')->prefix('smartsheet')->group(function() {
    Route::get('/getall', [SheetsController::class, 'getall']);
    Route::get('/sheetdetail/{id}', [SheetsController::class, 'sheetdetail']);
    Route::get('/createsheet', [SheetsController::class, 'create']);
});

Route::name('teamdeck-api')->prefix('teamdeck')->group(function() {
    Route::get('/getall', [SheetsController::class, 'getall']);
    Route::get('/sheetdetail/{id}', [SheetsController::class, 'sheetdetail']);
    Route::get('/createsheet', [SheetsController::class, 'create']);
});
