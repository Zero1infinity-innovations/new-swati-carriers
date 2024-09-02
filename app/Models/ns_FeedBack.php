<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ns_FeedBack extends Model
{
    use HasFactory;

    protected $table = 'ns__feed_backs';

    protected $fillable = ['name', 'email', 'feedback', 'ipAddress'];

}
