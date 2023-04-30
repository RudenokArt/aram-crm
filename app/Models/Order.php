<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'orders';
  use HasFactory;
  public function contractor_data() {
    return $this->belongsTo(User::class, 'contractor');
  }
  public function manager_data() {
    return $this->belongsTo(User::class, 'manager');
  }
}
