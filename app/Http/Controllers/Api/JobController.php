<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Job;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Job[]|Application|Factory|View|Collection|Response
   */
  public function index()
  {
    $openJobs = Job::all()->where('active_job', true);
    $closedJobs = Job::all()->where('active_job', false);
    return view('job.index')
      ->with('openJobs', $openJobs)
      ->with('closedJobs', $closedJobs);
  }

  /**
   * Display the specified resource.
   *
   * @param Job $job
   * @return Job|Application|Factory|View|Response
   */
  public function show(Job $job)
  {
    $totalOT = $job->jobDetails->sum(function ($detail) {
      return $detail->part_cost + $detail->workforce_cost;
    });

    $bill = Bill::all()
      ->where('job_id', $job->id)
      ->last();

    return view('job.show')
      ->with('job', $job)
      ->with('totalOT', $totalOT)
      ->with('bill', $bill);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param Job $job
   * @return Application|Factory|View|Response
   */
  public function update(Request $request, Job $job)
  {
    $totalOT = $job->jobDetails->sum(function ($detail) {
      return $detail->part_cost + $detail->workforce_cost;
    });
    $job->active_job = false;
    $job->save();

    $data = $request->all();
    $data['job_id'] = $job->id;
    $data['customer_id'] = $job->vehicule->customer->id;
    $data['total_cost'] = $totalOT;
    $data['total_tax'] = ($totalOT * 0.19);

    $bill = Bill::create($data);

    return view('job.show')
      ->with('job', $job)
      ->with('totalOT', $totalOT)
      ->with('bill', $bill);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Job $job
   * @return RedirectResponse|Response
   */
  public function destroy(Job $job)
  {
    Job::destroy($job->id);
    return Redirect::route('vehicule.index');
  }
}
