<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ns_Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'number', 'message', 'ip_address'];
}
