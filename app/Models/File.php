<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class File extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'due_at' => 'datetime:Y-m-d',
        'published_at' => 'datetime:Y-m-d',
    ];


    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('attachment')
            ->singleFile();
    }
}
