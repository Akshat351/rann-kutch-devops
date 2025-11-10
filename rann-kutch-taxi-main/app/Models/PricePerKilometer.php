<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DateTimeInterface;

class PricePerKilometer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'price_per_kilometer';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'mini_price_per_km',
        'sedan_price_per_km',
        'suv_price_per_km',
        'innova_price_per_km',
        'min_km_per_day',
        'driver_allowance_per_day'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
