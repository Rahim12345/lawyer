<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $table = 'evaluations';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'clock',
        'service_id',
        'message',
        'read_unread'
    ];

    public function getService()
    {
        return $this->hasOne(Service::class,'id','service_id');
    }
}
