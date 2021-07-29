<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    use HasFactory;

    public function wilaya()
    {
        return $this->belongsTo('App\Models\Wilaya');
    }

    public function communes()
    {
        return $this->hasMany('App\Models\Commune');
    }
}
