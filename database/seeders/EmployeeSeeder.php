<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public
  function run()
  {
    Employee::factory()->create([
      'firstname' => 'Elber',
      'lastname' => 'Galarga',
      'document_type' => 'C.C.',
      'document_number' => '1012114466',
    ]);
  }
}
