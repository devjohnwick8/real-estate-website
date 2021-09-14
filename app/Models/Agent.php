<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Agent extends Model
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['about'];
    protected $fillable = ['full_name', 'phone', 'email', 'image'];
}