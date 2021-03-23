<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'job_id',
    'customer_id',
    'total_cost',
    'total_tax'
  ];

  public static function createRules()
  {
    return [
      'job_id' => ['required', 'numeric', 'min:1'],
      'customer_id' => ['required', 'numeric', 'min:1'],
    ];
  }

  public static function createOnly()
  {
    return [
      'job_id',
      'customer_id'
    ];
  }

  /**
   * @return BelongsTo
   */
  public function job(): BelongsTo
  {
    return $this->belongsTo(Job::class);
  }

  public function customer(): BelongsTo
  {
    return $this->belongsTo(Customer::class);
  }
}
