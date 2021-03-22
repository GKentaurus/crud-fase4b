<?php

namespace Database\Seeders;

use App\Models\Vehicule;
use Illuminate\Database\Seeder;

class VehiculeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Vehicule::factory()->create([
      'customer_id' => 1,
      'license_plate' => 'ABC-123',
      'brand' => 'Mazda',
      'model' => '2020',
      'color' => 'Gris'
    ]);
  }
}
