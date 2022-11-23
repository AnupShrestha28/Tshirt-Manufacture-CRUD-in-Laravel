<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TshirtController;

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

Route::get('tshirt-list', [TshirtController::class, 'index']);

Route::get('add-tshirt', [TshirtController::class, 'addTshirt']);

Route::post('save-tshirt', [TshirtController::class, 'saveTshirt']);

Route::get('edit-tshirt/{id}', [TshirtController::class, 'editTshirt']);

Route::post('update-tshirt', [TshirtController::class, 'updateTshirt']);

Route::get('delete-tshirt/{id}', [TshirtController::class, 'deleteTshirt']);
