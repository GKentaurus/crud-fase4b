<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Job;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Date;

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
   * Show the form for creating a new resource.
   *
   * @return Application|Factory|View|Response
   */
  public function create()
  {
    return view('job.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param Job $job
   * @return Job|Application|Factory|View|Response
   */
  public function show(Job $job)
  {
    $totalOT = $job->jobDetails->sum(function($detail) {
      return $detail->part_cost + $detail->workforce_cost;
    });
    return view('job.show')
      ->with('job', $job)
      ->with('totalOT', $totalOT);
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
   * @return Application|Factory|View|Response
   */
  public function update(Request $request, Job $job)
  {
    $totalOT = $job->jobDetails->sum(function($detail) {
      return $detail->part_cost + $detail->workforce_cost;
    });
    $job->active_job = false;
    $job->save();
    return view('job.show')
      ->with('job', $job)
      ->with('totalOT', $totalOT);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Job $job
   * @return Response
   */
  public function destroy(Job $job)
  {
    Job::destroy($job->id);
  }
}
