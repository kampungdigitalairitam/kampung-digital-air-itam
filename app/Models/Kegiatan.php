<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tumbnail_image',
        'title',
        'description',
        'content_images',
        'content_descriptions',
    ];

    protected $casts = [
        'content_images' => 'array',
        'content_descriptions' => 'array',
    ];
}

