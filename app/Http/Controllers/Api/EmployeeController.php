<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class EmployeeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Employee[]|Application|Factory|View|Collection|Response
   */
  public function index()
  {
    return view('employee.index')->with('employees', Employee::all());
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Application|Factory|View|Response
   */
  public function create()
  {
    return view('employee.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return RedirectResponse|Response
   * @throws ValidationException
   */
  public function store(Request $request)
  {
    if ($this->validate($request, Employee::createRules())) {
      Employee::create($request->only(Employee::createOnly()));
    }
    return Redirect::route('employee.index');
  }

  /**
   * Display the specified resource.
   *
   * @param Employee $employee
   * @return Employee|Application|Factory|View|RedirectResponse|Response
   */
  public function show(Employee $employee)
  {
    return view('employee.show')->with('employee', $employee);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param Employee $employee
   * @return Application|Factory|View|Response
   */
  public function edit(Employee $employee)
  {
    return view('employee.edit')->with('employee', $employee);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param Employee $employee
   * @return RedirectResponse|Response
   * @throws ValidationException
   */
  public function update(Request $request, Employee $employee)
  {
    if ($this->validate($request, Employee::createRules())) {
      $employee->fill($request->only(Employee::updateRules()));
      $employee->save();
    }
    return Redirect::route('employee.show', $employee);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Employee $employee
   * @return RedirectResponse|Response
   */
  public function destroy(Employee $employee)
  {
    $employeeName = $employee->firstname . ' ' . $employee->lastname;
    Employee::destroy($employee->id);
    return Redirect::route('customer.index')->with('employeeName', $employeeName);
  }
}
