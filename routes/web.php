<?php

use App\Http\Controllers\ScholarshipController;
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
    // return view('welcome');
    return redirect('/scholarship');
});

Route::get('scholarship', [ScholarshipController::class, 'show']);
Route::get('scholarship/application', [ScholarshipController::class, 'show_form']);
Route::get('scholarship/privacy', [ScholarshipController::class, 'show_privacy']);
Route::post('submit/application', [ScholarshipController::class, 'submit_application']);
Route::get('application/{id}', [ScholarshipController::class, 'application_form']);