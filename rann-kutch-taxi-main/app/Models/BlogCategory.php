<?php

namespace App\Models;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BlogCategory extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia,HasFactory;

    public $table = 'blog_categories';

    protected $appends = [
        'main_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'slug',
        'small_description',
        'long_description',
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

    public function getMainImageAttribute()
    {
        $file = $this->getMedia('main_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
             $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function blogPosts()
    {
        return $this->belongsToMany(BlogPost::class,'blog_category_blog_post_pivot');
    }

}
