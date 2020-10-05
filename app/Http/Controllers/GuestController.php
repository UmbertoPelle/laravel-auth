<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class GuestController extends Controller{

  public function index(){

    $emps = Employee::all();
    return view('emp-index', compact('emps'));
  }

  public function show($id){

    $emp = Employee::findOrFail($id);
    return view('emp-show', compact('emp'));
  }

}
