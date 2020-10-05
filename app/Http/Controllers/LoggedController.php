<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class LoggedController extends Controller{

  public function __construct(){
      $this->middleware('auth');
  }

  public function delete($id){

    $emp = Employee::findOrFail($id);
    $emp -> delete();
    return redirect() -> route('emp-index');
  }
}
