<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public
  function run()
  {
    Customer::factory()->create([
      'firstname' => 'Carlos',
      'lastname' => 'Moreno',
      'document_type' => 'C.C.',
      'document_number' => '1014199963',
      'address' => 'Av falsa 123',
      'phone_number' => '3165378432'
    ]);
  }
}
