<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inquiry extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'inquiries';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ip',
        'mobile',
        'email',
        'name',
        'subject',
        'description',
        'page_url',
        'user_id',
        'source_id',
        'pickup_date',
        'pickup_time',
        'return_date',
        'return_time',
        'discount',
        'discounted_amount',
        'car_type',
        'total_amount',
        'payment_type',
        'destination_id',
        'trip_id',
        'airport_id',
        'local_cab_id',
        'car_rental_id',
        'tempo_traveller_id',
        'tour_category_id',
        'tour_package_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function source()
    {
        return $this->belongsTo(Source::class, 'source_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }

    public function airport()
    {
        return $this->belongsTo(Airport::class, 'airport_id');
    }

    public function local_cab()
    {
        return $this->belongsTo(LocalCab::class, 'local_cab_id');
    }

    public function car_rental()
    {
        return $this->belongsTo(CarRental::class, 'car_rental_id');
    }

    public function tempo_traveller()
    {
        return $this->belongsTo(TempoTraveller::class, 'tempo_traveller_id');
    }

    public function tour_category()
    {
        return $this->belongsTo(TourCategory::class, 'tour_category_id');
    }

    public function tour_package()
    {
        return $this->belongsTo(TourPackage::class, 'tour_package_id');
    }
}
