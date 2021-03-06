<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Job;
use App\Models\JobDetail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class JobDetailController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @param Job $job
   * @return JobDetail[]|Collection|Response
   */
  public function index(Job $job)
  {
    return JobDetail::all()->where('job_id', $job->id);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @param Job $job
   * @return Application|Factory|View|Response
   */
  public function create(Job $job)
  {
    $employees = Employee::all();
    return view('job.detail.create')
      ->with('job', $job)
      ->with('employees', $employees);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @param Job $job
   * @return RedirectResponse|Response
   * @throws ValidationException
   */
  public function store(Request $request, Job $job)
  {
//    return Redirect::route('job.show', $job->id);
    if($this->validate($request, JobDetail::createRules())) {
      $data = $request->only(JobDetail::createOnly());
      $data['job_id'] = $job->id;
      $data['part_cost'] = (double)$data['part_cost'];
      $data['workforce_cost'] = (double)$data['workforce_cost'];
      JobDetail::create($data);
    }
    return Redirect::route('job.show', $job->id);
  }

  /**
   * Display the specified resource.
   *
   * @param Job $job
   * @param JobDetail $jobDetail
   * @return JobDetail|Application|Factory|View|Response
   */
  public function show(Job $job, JobDetail $jobDetail)
  {
    return view('job.detail.show')
      ->with('job', $job)
      ->with('jobDetail', $jobDetail);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Job $job
   * @param JobDetail $jobDetail
   * @return Application|Factory|View|Response
   */
  public function edit(Job $job, JobDetail $jobDetail)
  {
    $employees = Employee::all();
    return view('job.detail.edit')
      ->with('job', $job)
      ->with('jobDetail', $jobDetail)
      ->with('employees', $employees);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param Job $job
   * @param JobDetail $jobDetail
   * @return RedirectResponse|Response
   * @throws ValidationException
   */
  public function update(Request $request, Job $job, JobDetail $jobDetail)
  {
    if($this->validate($request, JobDetail::updateRules())) {
      $jobDetail->fill($request->only(JobDetail::updateOnly()));
      $jobDetail->save();
      return Redirect::route('job.show', $jobDetail->job->id);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Job $job
   * @param JobDetail $jobDetail
   * @return RedirectResponse|Response
   */
  public function destroy(Job $job, JobDetail $jobDetail)
  {
    $job = $job->id;
    JobDetail::destroy($jobDetail->id);
    return Redirect::route('job.show', $job);
  }
}
