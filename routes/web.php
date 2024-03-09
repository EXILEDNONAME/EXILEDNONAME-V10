<?php

use Illuminate\Support\Facades\Route;

include(base_path(). '/routes/backend/default.php');

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/template', function () {
    return view('layouts.backend.default');
});


// TABLES - GENERALS
Route::group([
  'as' => 'dashboard.demo.datatables.',
  'prefix' => 'dashboard/demos/datatables',
  'namespace' => 'App\Http\Controllers\Backend\Demo\Datatable',
  'middleware' => 'auth',
], function () {
  Route::resource('/', 'GeneralController')->parameters(['' => 'id']);
});

Route::get('/dashboard/datatables', [App\Http\Controllers\Backend\Demo\Datatable\GeneralController::class, 'index'])->name('dashboard.datatables');
