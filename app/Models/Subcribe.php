<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcribe extends Model
{
    protected $fillable = [
        'email',
        'isSubcribe',
    ];
}
