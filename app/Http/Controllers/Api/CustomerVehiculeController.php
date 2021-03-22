<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Vehicule;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class CustomerVehiculeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @param Customer $customer
   * @return Vehicule[]|Application|Factory|View|Collection|Response
   */
  public function index(Customer $customer)
  {
    $vehicules = Vehicule::all()->where('user_id', $customer->id);
    return view('customer.vehicule.index')->with('vehicules', $vehicules);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @param Customer $customer
   * @return Application|Factory|View|Response
   */
  public function create(Customer $customer)
  {
    return view('customer.vehicule.create')->with('customer', $customer);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @param Customer $customer
   * @return RedirectResponse|Response
   * @throws ValidationException
   */
  public function store(Request $request, Customer $customer)
  {
    if ($this->validate($request, Vehicule::createRules())) {
      $data = $request->only(Vehicule::createOnly());
      $data['customer_id'] = $customer->id;
      Vehicule::create($data);
    }
    return Redirect::route('vehicule.show', $customer->id);
  }
}
