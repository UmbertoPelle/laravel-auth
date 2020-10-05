<?php


use App\Employee;
use App\Task;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      factory(Task::class, 100)
          ->create()
          ->each(function($task){

            $emps = Employee::inRandomOrder()
                  -> take(rand(5,10))
                  -> get();

            $task -> employees() -> attach($emps);
          });
    }
}
