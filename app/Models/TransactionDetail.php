<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table = "transactionsdetail";
    protected $primaryKey = 'transDetailId';
    protected $fillable = [
        'transId',
        'herbsId',
        'price',
        'quantity',
    ];

    public function transaction()
    {
        return  $this->belongsTo(Transactions::class, 'transId');
    }
    public function herbs()
    {
        return  $this->belongsTo(Herbs::class, 'herbsId');
    }
}
