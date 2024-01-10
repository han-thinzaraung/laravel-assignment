<?php

use GuzzleHttp\Middleware;
use App\Policies\StudentPolicy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SstudentController;
use App\Models\Sstudent;

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
Route::resource('student',StudentController::class)->middleware('auth');


Route::middleware('auth')->group(function () {
Route::get('sstudent', [SstudentController::class, 'index'])->name('sstudent.index');
Route::get('sstudent/create', [SstudentController::class, 'create'])->name('sstudent.create');
Route::post('sstudent', [SstudentController::class, 'store'])->name('sstudent.store');
Route::get('sstudent/{sstudent}/edit', [SstudentController::class, 'edit'])->name('sstudent.edit');
Route::put('sstudent/{sstudent}', [SstudentController::class, 'update'])->name('sstudent.update');
Route::get('sstudent/{sstudent}', [SstudentController::class, 'show'])->name('sstudent.show');
Route::delete('sstudent/{sstudent}', [SstudentController::class, 'destroy'])->name('sstudent.destroy');
});




