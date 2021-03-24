<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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

class VehiculeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Vehicule[]|Application|Factory|View|Collection|Response
   */
  public function index()
  {
    return view('vehicule.index')->with('vehicules', Vehicule::all());
  }

  /**
   * Display the specified resource.
   *
   * @param Vehicule $vehicule
   * @return Application|Factory|View|Response
   */
  public function show(Vehicule $vehicule)
  {
    return view('vehicule.show')->with('vehicule', $vehicule);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Vehicule $vehicule
   * @return Application|Factory|View|Response
   */
  public function edit(Vehicule $vehicule)
  {
    return view('vehicule.edit')->with('vehicule', $vehicule);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param Vehicule $vehicule
   * @return RedirectResponse|Response
   * @throws ValidationException
   */
  public function update(Request $request, Vehicule $vehicule)
  {
    if ($this->validate($request, Vehicule::createRules())) {
      $vehicule->fill($request->only(Vehicule::updateRules()));
      $vehicule->save();
    }
    return Redirect::route('vehicule.show', $vehicule);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Vehicule $vehicule
   * @return RedirectResponse|Response
   */
  public function destroy(Vehicule $vehicule)
  {
    $vehicule_license_plate = $vehicule->license_plate;
    Vehicule::destroy($vehicule->id);
    return Redirect::route('customer.index')->with('license_plate', $vehicule_license_plate);
  }
}
