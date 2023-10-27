<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herbs extends Model
{
    use HasFactory;

    protected $fillable = [
        'herbName',
        'herbPrice',
        'herbFact',
        'scientificName',
        'herbOrigin',
        'herbCollection',
        'magicalProperty',
        'watering',
        'temperature',
        'sunlight',
        'soil',
        'appearance',
        'history',
        'endingDescription'
    ];
}
