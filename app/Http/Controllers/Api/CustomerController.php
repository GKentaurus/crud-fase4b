<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class CustomerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Customer[]|Application|Factory|View|Collection|Response
   */
  public function index()
  {
    return view('customer.index')->with('customers', Customer::all());
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Application|Factory|View|Response
   */
  public function create()
  {
    return view('customer.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return Customer|Model|RedirectResponse|Response
   * @throws ValidationException
   */
  public function store(Request $request)
  {
    if ($this->validate($request, Customer::createRules())) {
      Customer::create($request->only(Customer::createOnly()));
    }
    return Redirect::route('customer.index');
  }

  /**
   * Display the specified resource.
   *
   * @param Customer $customer
   * @return Application|Factory|View|RedirectResponse
   */
  public function show(Customer $customer)
  {
    return view('customer.show')->with('customer', $customer);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Customer $customer
   * @return Application|Factory|View|Response
   */
  public function edit(Customer $customer)
  {
    return view('customer.edit')->with('customer', $customer);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param Customer $customer
   * @return RedirectResponse|Response
   * @throws ValidationException
   */
  public function update(Request $request, Customer $customer)
  {
    if ($this->validate($request, Customer::createRules())) {
      $customer->fill($request->only(Customer::updateRules()));
      $customer->save();
    }
    return Redirect::route('customer.show', $customer);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Customer $customer
   * @return Application|Factory|View|RedirectResponse|Response
   */
  public function destroy(Customer $customer)
  {
    $customerName = $customer->firstname . ' ' . $customer->lastname;
    Customer::destroy($customer->id);
    return Redirect::route('customer.index')->with('customerName', $customerName);
  }
}
