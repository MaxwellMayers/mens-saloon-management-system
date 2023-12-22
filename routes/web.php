<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;



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

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
//Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
//Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
//Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
//Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');



Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
//Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
//Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
//Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
//Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');


Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show');
Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
//Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('appointments.update');
//Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');



Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboards.index');

    // Appointments
    Route::resource('appointments', 'AppointmentController');
    
    // Services
    Route::resource('services', 'ServiceController');

    // Customers
    Route::resource('customers', 'CustomerController');
    
    // Statistics
    Route::get('statistics', 'DashboardController@statistics')->name('statistics');
});
