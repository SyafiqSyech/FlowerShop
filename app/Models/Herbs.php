<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herbs extends Model
{
    use HasFactory;
    protected $table = "herbs";

    protected $primaryKey = 'herbsId';
    protected $fillable = [
        'herbsImage',
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

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transDetailId');
    }

    public function favorites()
    {
        return $this->hasMany(Favorites::class, 'herbsId', 'herbsId');
    }

    public function carts()
    {
        return $this->hasMany(Carts::class, 'herbsId', 'herbsId');
    }

    public function isFavorited()
    {
        $userId = auth()->id();

        return $this->favorites()->where('userId', $userId)->exists();
    }
}
