<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobDetail extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'job_id',
    'employee_id',
    'intervened_part',
    'intervention_description',
    'part_cost',
    'workforce_cost',
  ];

  public static function createRules() {
    return [
      'employee_id' => ['required', 'numeric'],
      'intervened_part' => ['required', 'min:3'],
      'intervention_description' => ['required', 'min:3'],
      'part_cost' => ['numeric', 'min:0'],
      'workforce_cost' => ['required', 'numeric', 'min:0'],
    ];
  }

  public static function createOnly() {
    return [
      'employee_id',
      'intervened_part',
      'intervention_description',
      'part_cost',
      'workforce_cost',
    ];
  }

  public static function updateRules() {
    return [
      'employee_id',
      'intervened_part',
      'intervention_description',
      'part_cost',
      'workforce_cost',
    ];
  }

  public function job(): BelongsTo {
    return $this->belongsTo(Job::class);
  }

  public function employee(): BelongsTo
  {
    return $this->belongsTo(Employee::class);
  }
}
