<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\UsesUuid;

class Blog extends Model
{
    use HasFactory, UsesUuid;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_category');
    }

    public function getImage()
    {
        return asset('storage/' . $this->image);
    }
}
