<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'vehicule_id',
    'total_cost',
    'total_tax'
  ];

  public static function createRules()
  {
    return [
      'vehicule_id' => ['required', 'numeric', 'min:1'],
    ];
  }

  public static function createOnly()
  {
    return [
      'vehicule_id'
    ];
  }
}
