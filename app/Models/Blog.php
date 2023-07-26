<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    // Creating relationship with models Blog and BlogCategory based on foreign key blog_category_id and id
    public function category() {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    }
}
