<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController; // Note the corrected 'Controllers' namespace and the missing semicolon.

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

Route::resource('/', MainController::class); // Corrected the class reference and added a semicolon.

