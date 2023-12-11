<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    protected $table = "carts";
    protected $primaryKey = 'cartsId';

    protected $fillable = [
        'userId',
        'herbsId',
        'herbsImage',
        'herbName',
        'herbPrice',
        'quantity'
    ];

    public function user()
    {
        return  $this->belongsTo(User::class, 'userId');
    }

    public function herbs()
{
    return $this->belongsTo(Herbs::class, 'herbsId', 'herbsId');
}
}
