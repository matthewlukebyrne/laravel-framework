<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Eloquent Models
class Stacks extends Model
{
    // Will automatically change it into a JSON string
    protected $casts = [
      'features' => 'array'
    ];
}
