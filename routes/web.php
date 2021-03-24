<?php

use App\Http\Controllers\Api\BillController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\CustomerVehiculeController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\IndexController;
use App\Http\Controllers\Api\JobController;
use App\Http\Controllers\Api\JobDetailController;
use App\Http\Controllers\Api\VehiculeController;
use App\Http\Controllers\Api\VehiculeJobController;
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

Route::get('/', [IndexController::class, 'index']);

Route::resource('customer', CustomerController::class);
Route::resource('customer/{customer}/vehicule', CustomerVehiculeController::class,
  [
    'names' => [
      'index' => 'customer.vehicule.index',
      'create' => 'customer.vehicule.create',
      'store' => 'customer.vehicule.store',
    ],
    'only' => [
      'index',
      'create',
      'store'
    ]
  ]
);
Route::resource('vehicule/{vehicule}/job', VehiculeJobController::class,
  [
    'names' => [
      'index' => 'vehicule.job.index',
      'store' => 'vehicule.job.store',
    ],
    'only' => [
      'index',
      'store'
    ]
  ]
);
Route::resource('vehicule', VehiculeController::class);
Route::resource('job', JobController::class,
  [
    'except' => [
      'create',
      'store'
    ]
  ]
);
Route::resource('job/{job}/job-detail', JobDetailController::class,
  [
    'names' => [
      'index' => 'job.detail.index',
      'create' => 'job.detail.create',
      'store' => 'job.detail.store',
      'show' => 'job.detail.show',
      'edit' => 'job.detail.edit',
      'update' => 'job.detail.update',
      'destroy' => 'job.detail.destroy',
    ],
  ]
);
Route::resource('employee', EmployeeController::class);
Route::resource('bill', BillController::class,
  [
    'only' => [
      'index',
      'show'
    ]
  ]
);
