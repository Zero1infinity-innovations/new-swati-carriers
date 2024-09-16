<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_name',
        'service_description',
        'service_status',
        'ipAddress'
    ];

    // Define relationship
    public function images()
    {
        return $this->hasMany(ServicesImage::class);
    }
}
