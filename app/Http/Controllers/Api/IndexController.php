<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Job;
use App\Models\Vehicule;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
  /**
   * @return Application|Factory|View
   */
  public function index()
  {
    $totalCustomers = Customer::all()->count();
    $totalEmployees = Employee::all()->count();
    $totalOpenJobs = Job::all()->where('active_job',true)->count();
    $totalClosedJobs = Job::all()->where('active_job',false)->count();
    $totalVehicules = Vehicule::all()->count();

    return view('index')
      ->with('totalCustomers', $totalCustomers)
      ->with('totalEmployees', $totalEmployees)
      ->with('totalOpenJobs', $totalOpenJobs)
      ->with('totalClosedJobs', $totalClosedJobs)
      ->with('totalVehicules', $totalVehicules);
  }
}
