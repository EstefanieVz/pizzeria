<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {//Ruta de bienvenida 
    return view('index');
})-> name('index');

Route::resource('/addresses',AddressController::class);
Route::resource('/clients',ClientController::class);
Route::resource('/drivers',DriverController::class);
Route::resource('/employees',EmployeeController::class);
Route::resource('/orders',OrderController::class);
Route::resource('/pizzas',PizzaController::class);

Route::get('/addresses/{address}/delete',[App\Http\Controllers\AddressController::class,'delete'])->name('addresses.delete');
Route::get('/clients/{client}/delete',[App\Http\Controllers\ClientController::class,'delete'])->name('clients.delete');
Route::get('/drivers/{driver}/delete',[App\Http\Controllers\DriverController::class,'delete'])->name('drivers.delete');
Route::get('/employees/{employee}/delete',[App\Http\Controllers\EmployeeController::class,'delete'])->name('employees.delete');
Route::get('/orders/{order}/delete',[App\Http\Controllers\OrderController::class,'delete'])->name('orders.delete');
Route::get('/pizzas/{pizza}/delete',[App\Http\Controllers\PizzaController::class,'delete'])->name('pizzas.delete');