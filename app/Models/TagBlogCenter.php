<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagBlogCenter extends Model
{
    use HasFactory;

    protected $table = 'tag_blog_centers';

    protected $fillable = [
        'blog_id',
        'tag_id'
    ];
}
