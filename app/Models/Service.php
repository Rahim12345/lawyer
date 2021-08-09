<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'cover',
        'service_name_az',
        'service_name_en',
        'service_less_az',
        'service_less_en',
        'service_more_az',
        'service_more_en',
        'slug'
    ];
}
