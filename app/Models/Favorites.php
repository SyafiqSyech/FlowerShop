<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;
    protected $table = "favorites";
    protected $primaryKey = 'favoritesId';
    protected $fillable = [
        'userId',
        'herbsId'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
