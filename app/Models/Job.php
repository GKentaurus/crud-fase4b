<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'vehicule_id',
    'active_job'
  ];

  public static function createRules() {
    return [
      'vehicule_id' => ['required', 'numeric'],
      'active_job' => ['boolean'],
    ];
  }

  public static function createOnly() {
    return [
      'vehicule_id'
    ];
  }

  public static function updateRules() {
    return [
      'vehicule_id',
      'active_job'
    ];
  }

  /**
   * @return BelongsTo
   */
  public function vehicule(): BelongsTo
  {
    return $this->belongsTo(Vehicule::class);
  }

  /**
   * @return HasMany
   */
  public function jobDetails(): HasMany
  {
    return $this->hasMany(JobDetail::class);
  }

  /**
   * @return HasOne
   */
  public function bill(): HasOne
  {
    return $this->hasOne(Bill::class);
  }
}
