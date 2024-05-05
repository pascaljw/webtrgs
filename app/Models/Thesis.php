<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\UsesUuid;

class Thesis extends Model
{
    use HasFactory, UsesUuid;
    protected $guarded = [];
}
