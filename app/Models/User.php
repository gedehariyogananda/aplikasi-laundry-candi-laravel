<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class User extends Model
{
    protected $collection = 'users';

    protected $fillable = [
        'no_pelanggan',
        'name',
        'no_telp',
        'gender',
        'alamat',
    ];

    public function user_purchaseds()
    {
        return $this->hasMany(UserPurchased::class);
    }

    public function spesification()
    {
        return $this->belongsTo(Spesification::class);
    }
}
