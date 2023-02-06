<?php

use App\Http\Controllers\Admin\SchoolController;


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

Route::controller(SchoolController::class)->prefix('admin/school')->name('admin.')->middleware('auth')->group(function () {
    Route::get('create','add')->name('school.add');
    Route::post('create','create')->name('school.create');
    Route::get('/','index')->name('school.index');
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
