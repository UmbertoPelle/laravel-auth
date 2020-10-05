<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;


class LoggedController extends Controller{

  public function __construct(){
      $this->middleware('auth');
  }

  public function delete($id){

    $emp = Employee::findOrFail($id);
    $emp -> delete();
    return redirect() -> route('emp-index');
  }

  public function edit($id){
    $emp = Employee::findOrFail($id);
    $locs = Location::all();

    return view('emp-update', compact('emp','locs'));
  }

  public function update(Request $request, $id){

    $data = $request -> all();
    $emp = Employee::findOrFail($id);

    $emp -> update($data);
    return redirect() -> route('emp-index');
  }
}
