<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'document_type',
    'document_number',
    'firstname',
    'lastname',
  ];

  public static function createRules()
  {
    return [
      'document_type' => ['required'],
      'document_number' => ['required'],
      'firstname' => ['required', 'min:3'],
      'lastname' => ['required', 'min:5'],
    ];
  }

  public static function createOnly()
  {
    return [
      'document_type',
      'document_number',
      'firstname',
      'lastname',
    ];
  }

  public static function updateRules()
  {
    return [
      'firstname',
      'lastname',
    ];
  }

  /**
   * @return HasMany
   */
  public function jobDetails(): HasMany
  {
    return $this->hasMany(JobDetail::class);
  }
}
