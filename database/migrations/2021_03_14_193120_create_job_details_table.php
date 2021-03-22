<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDetailsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('job_details', function (Blueprint $table) {
      $table->id();
      $table->foreignId('job_id');
      $table->foreignId('employee_id');
      $table->string('intervened_part');
      $table->string('intervention_description');
      $table->double('part_cost');
      $table->double('workforce_cost');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('job_details');
  }
}
