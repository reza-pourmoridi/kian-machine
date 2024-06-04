<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'model',
        'cylinderCount',
        'axleCount',
        'wheelCount',
        'vin',
        // ... other car_info table columns
        'purchaseDate',
        'unitCode',
        'register_date',
        'tireBody',
        'carBody',
        'shieldBody',
        'glassBody',
        'motorBody',
        'ampBody',
        'lightingBody',
        'seatBody',
        'voiceBody',
        'coolerBody',
        'codeBody',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
