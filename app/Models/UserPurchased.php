<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class UserPurchased extends Model
{
    protected $collection = 'user_purchaseds';

    protected $fillable = [
        'user_id',
        'payment_method_id',
        'spesification_id',
        'quantity_laundry',
        'tanggal_pengajuan_laundry',
        'tanggal_selesai_laundry',
        'subtotal_laundry',
        'status_laundry',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function spesification()
    {
        return $this->belongsTo(Spesification::class);
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }
}
