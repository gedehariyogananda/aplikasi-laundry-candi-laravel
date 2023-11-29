<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Spesification extends Model
{
    protected $collection = 'spesifications';

    protected $fillable = [
        'spesifikasi_cuci',
        'harga/kilo',
    ];

    public function user_purchaseds()
    {
        return $this->hasMany(UserPurchased::class, 'id');
    }
}
