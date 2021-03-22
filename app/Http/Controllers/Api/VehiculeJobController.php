<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Vehicule;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class VehiculeJobController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Application|Factory|View|Response
   */
  public function index()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @param Vehicule $vehicule
   * @return RedirectResponse|Response
   */
  public function store(Request $request, Vehicule $vehicule)
  {
    $activeJobsPerVehicule = Job::all()
      ->where('vehicule_id', $vehicule->id)
      ->where('active_job', true);
    if ($activeJobsPerVehicule->count() > 0) {
      return Redirect::route('job.show', $activeJobsPerVehicule->last()->id);
    }

    $data = $request->only(Job::createOnly());
    $data['vehicule_id'] = $vehicule->id;
    $job = Job::create($data);
    return Redirect::route('job.show', $job->id);
  }

  /**
   * Display the specified resource.
   *
   * @param Job $job
   * @return Response
   */
  public function show(Job $job)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Job $job
   * @return Response
   */
  public function edit(Job $job)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param Job $job
   * @return Response
   */
  public function update(Request $request, Job $job)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Job $job
   * @return Response
   */
  public function destroy(Job $job)
  {
    //
  }
}
