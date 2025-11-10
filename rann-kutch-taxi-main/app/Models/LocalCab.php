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

class LocalCab extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;

    public $table = 'local_cabs';

    protected $appends = [
        'image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'slug',
        'source_id',
        'mini_eight_hr_eighty_km',
        'mini_ten_hr_hundred_km',
        'mini_twelve_hr_hundred_twenty_km',
        'sedan_eight_hr_eighty_km',
        'sedan_ten_hr_hundred_km',
        'sedan_twelve_hr_hundred_twenty_km',
        'suv_eight_hr_eighty_km',
        'suv_ten_hr_hundred_km',
        'suv_twelve_hr_hundred_twenty_km',
        'ertiga_eight_hr_eighty_km',
        'ertiga_ten_hr_hundred_km',
        'ertiga_twelve_hr_hundred_twenty_km',
        'distance',
        'mini',
        'sedan',
        'suv',
        'innova',
        'sort_description',
        'description',
        'meta_title',
        'meta_description',
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
}
