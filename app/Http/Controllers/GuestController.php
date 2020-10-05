<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;


class GuestController extends Controller{

  public function index(){

    $locs = Location::all();
    $emps = Employee::all();
    return view('emp-index', compact('emps', 'locs'));
  }

  public function show($id){

    $emp = Employee::findOrFail($id);
    return view('emp-show', compact('emp'));
  }


}
