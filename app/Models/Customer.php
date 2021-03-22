<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'document_type',
    'document_number',
    'firstname',
    'lastname',
    'address',
    'phone_number'
  ];

  public static function createRules()
  {
    return [
      'document_type' => ['required'],
      'document_number' => ['required', 'numeric'],
      'firstname' => ['required', 'min:3'],
      'lastname' => ['required', 'min:3'],
      'address' => ['required', 'min:10'],
      'phone_number' => ['required','numeric','min:7'],
    ];
  }

  public static function createOnly()
  {
    return [
      'document_type',
      'document_number',
      'firstname',
      'lastname',
      'address',
      'phone_number',
    ];
  }

  public static function updateRules()
  {
    return [
      'firstname',
      'lastname',
      'address',
      'phone_number'
    ];
  }

  /**
   * @return HasMany
   */
  public function vehicules(): HasMany
  {
    return $this->hasMany(Vehicule::class);
  }
}
