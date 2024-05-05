<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\UsesUuid;
class Team extends Model
{
    use HasFactory, UsesUuid;

    protected $guarded = [];

    public function getImage()
    {
        return asset('storage/' . $this->image);
    }
}
