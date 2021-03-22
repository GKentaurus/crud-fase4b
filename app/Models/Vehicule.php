<?php

namespace App\Models;

use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicule extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'customer_id',
    'license_plate',
    'brand',
    'model',
    'color'
  ];

  public static function createRules() {
    return [
      'license_plate' => ['required', 'min:6', 'max:8'],
      'brand' => ['required', 'min:3'],
      'model' => ['required', 'min:3'],
      'color' => ['required', 'min:3'],
    ];
  }

  public static function createOnly()
  {
    return [
      'customer_id',
      'license_plate',
      'brand',
      'model',
      'color'
    ];
  }

  public static function updateRules() {
    return [
      'license_plate',
      'brand',
      'model',
      'color'
    ];
  }

  /**
   * @return BelongsTo
   */
  public function customer(): BelongsTo
  {
    return $this->belongsTo(Customer::class);
  }

  public function jobs(): HasMany
  {
    return $this->hasMany(Job::class);
  }
}
