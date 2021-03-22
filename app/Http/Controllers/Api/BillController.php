<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BillController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return Bill[]|Collection|Response
   */
  public function index()
  {
    return Bill::all();
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param Request $request
   * @return Bill|Model|Response
   */
  public function store(Request $request)
  {
    if ($request->validate(Bill::createRules())) {
      return Bill::create($request->only(Bill::createOnly()));
    }
  }

  /**
   * Display the specified resource.
   *
   * @param Bill $bill
   * @return Bill|Response
   */
  public function show(Bill $bill)
  {
    return $bill;
  }

  /**
   * TODO: Eliminar método
   * Show the form for editing the specified resource.
   *
   * @param Bill $bill
   * @return Response
   */
  public function edit(Bill $bill)
  {
    //
  }

  /**
   * TODO: Eliminar método
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param Bill $bill
   * @return Response
   */
  public function update(Request $request, Bill $bill)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param Bill $bill
   * @return Response
   */
  public function destroy(Bill $bill)
  {
    Bill::destroy($bill->id);
  }
}
