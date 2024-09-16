<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'image_path',
    ];
}
