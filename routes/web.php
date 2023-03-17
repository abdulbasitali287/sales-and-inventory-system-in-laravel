<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.index');
});

Route::prefix('sales-and-inventory-system')->group(function(){
    // Jobs Routes
    Route::get('jobs/index',[JobController::class,'index'])->name('jobs.index');
    Route::get('jobs/create',[JobController::class,'create'])->name('jobs.create');
    Route::post('jobs/create',[JobController::class,'store'])->name('jobs.store');
    Route::get('jobs/edit/{id}',[JobController::class,'edit'])->name('jobs.edit');
    Route::post('jobs/update/{id}',[JobController::class,'update'])->name('jobs.update');
    // Employees Routes
    Route::get('employees/index',[EmployeeController::class,'index'])->name('employees.index');
    Route::get('employees/create',[EmployeeController::class,'create'])->name('employees.create');
    // Supplier Routes
    Route::get('supplier/index',[SupplierController::class,'index'])->name('supplier.index');
    Route::get('supplier/create',[SupplierController::class,'create'])->name('supplier.create');
    // Products Routes
    Route::get('product/index',[ProductController::class,'index'])->name('product.index');
    Route::get('product/create',[ProductController::class,'create'])->name('product.create');
    // Sales Routes
    Route::get('sales/index',[SaleController::class,'index'])->name('sales.index');
    Route::get('sales/create',[SaleController::class,'create'])->name('sales.create');
    // Customer Routes
    Route::get('customer/index',[CustomerController::class,'index'])->name('customer.index');
    Route::get('customer/create',[CustomerController::class,'create'])->name('customer.create');
    // Users Routes
    Route::get('users/index',[UserController::class,'index'])->name('users.index');
    Route::get('users/create',[UserController::class,'create'])->name('users.create');
});
