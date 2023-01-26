<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/report-submission', [App\Http\Controllers\ReportController::class, 'indexSub'])->name('progressSub');

//Route::get('/report-progress', [App\Http\Controllers\ReportController::class, 'indexProgress'])->name('progressReport');

Route::resource('reports', ReportController::class);

Route::get('lecturerReport', [ReportController::class, 'lecturerShow'])->name('lecturerReport');

Route::get('lecturerView/{report}', [ReportController::class, 'lecturerView'])->name('lecturerView');

Route::put('lecturerAccept', [ReportController::class, 'lecturerApprove'])->name('lecturerApprove');
