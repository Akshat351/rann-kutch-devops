<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Trip extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;

    public $table = 'trips';

    protected $appends = [
        'image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const TRIP_TYPE_SELECT = [
        '1' => 'source-to-destination-taxi',
    ];

    protected $fillable = [
        'name',
        'slug',
        'trip_type',
        'is_airport',
        'mini',
        'mini_round_trip',
        'sedan',
        'sedan_round_trip',
        'suv',
        'ertiga',
        'schema',
        'ertiga_round_trip',
        'distance',
        'suv_round_trip',
        'innova',
        'innova_round_trip',
        'sort_description',
        'description',
        'meta_title',
        'meta_description',
        'source_id',
        'destination_id',
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

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getImageAttribute()
    {
        $file = $this->getMedia('image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function source()
    {
        return $this->belongsTo(Source::class, 'source_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
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

    public function faqs()
    {
        return $this->belongsToMany(Faq::class);
    }
}
