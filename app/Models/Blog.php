<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'photo',
        'category_id',
        'title_az',
        'title_en',
        'blog_az',
        'blog_en',
        'show'
    ];

    public function getCategory()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function getTags()
    {
        return $this->hasMany(TagBlogCenter::class,'blog_id','id')->select('tag_blog_centers.tag_id');
    }
}
