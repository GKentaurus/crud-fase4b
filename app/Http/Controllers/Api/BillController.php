<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BillController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Bill[]|Application|Factory|View|Collection|Response
   */
  public function index()
  {
    return view('bill.index')
      ->with('bills', Bill::all());
  }

  /**
   * Display the specified resource.
   *
   * @param Bill $bill
   * @return Bill|Application|Factory|View|Response
   */
  public function show(Bill $bill)
  {
    $job = $bill->job;
    $vehicule = $job->vehicule;
    $customer = $vehicule->customer;
    $employee = $job->employee;
    return view('bill.show')
      ->with('bill', $bill)
      ->with('job', $job)
      ->with('vehicule', $vehicule)
      ->with('customer', $customer)
      ->with('employee', $employee);
  }
}
