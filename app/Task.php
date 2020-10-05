<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model{

  protected $fillable = [
    'name',
    'description',
    'date_start',
    'date_end'
  ];

  public function employees(){
    return $this -> belongsToMany(Employee::class);
  }
}
