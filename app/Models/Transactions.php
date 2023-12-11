<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = "transactions";

    protected $primaryKey = "transId";

    protected $fillable = [
        'userId',
        'paymentMethod',
        'courier',
        'address',
        'city',
        'state',
        'zipcode',
        'country',
        'totalPrice'
    ];

    public function user()
    {
        return  $this->belongsTo(User::class, 'userId');
    }

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transDetailId');
    }
}
