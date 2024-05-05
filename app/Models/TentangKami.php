<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

use App\Http\Traits\UsesUuid;
// use App\Http\Traits\NameHasSlug;
class TentangKami extends Model
{
    use HasFactory, UsesUuid;

    protected $guarded = [];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value).'-'.Str::random(4);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
