<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('employee-projects/', [EmployeeController::class, 'employeeProjects']);


Route::get('team-leader/', function () {
    return view('team-leader');
});

Route::get('project-manager/', function () {
    return view('project-manager');
});

Route::get('employee-team/', function () {
    return view('employee-team');
});

Route::get('employee-vacation/', function () {
    return view('employee-vacation');
});

Route::get('team-leader-vacation/', function () {
    return view('team-leader-vacation');
});

Route::get('project-manager-vacation/', function () {
    return view('project-manager-vacation');
});

Route::get('admin/', function () {
    return view('admin');
});


Route::get('admin-vacation/', function () {
    return view('admin-vacation');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin-enter-employee/', function () {
    return view('admin-enter-employee');
});

Route::post('/login', [UserController::class, 'login']);


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
