<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class PaymentMethod extends Model
{
  protected $collection = 'payment_methods';

  protected $fillable = [
    'payment_method_name',
  ];

  public function user_purchaseds()
  {
    return $this->hasMany(UserPurchased::class);
  }
}
