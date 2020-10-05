<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model{

  protected $fillable = [
    'city',
    'state',
    'street'
  ];

  public function employees(){
    return $this -> hasMany(Employee::class);
  }
}
