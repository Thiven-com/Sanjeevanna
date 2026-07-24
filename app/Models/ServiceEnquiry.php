<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceEnquiry extends Model
{
      protected $fillable = [
        'full_name',
        'contact',
        'email',
        'service',
        'property_type',
        'preferred_date',
        'address',
        'message',
    ];
}
