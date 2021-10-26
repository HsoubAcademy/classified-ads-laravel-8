<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function ads()
    {
        return $this->hasMany('App\Models\Ad');
    }
}
