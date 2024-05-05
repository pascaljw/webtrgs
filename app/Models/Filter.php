<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\UsesUuid;
class Filter extends Model
{
    use HasFactory, UsesUuid;

    protected $guarded = [];

    public function galleries()
    {
        return $this->hasToMany(Gallery::class);
    }
}
