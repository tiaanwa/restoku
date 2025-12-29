<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class orderitem extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'order_id',
        'item_id',
        'quantity',
        'price',
        'tax',
        'total_price',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['deleted_at'];

    public function order()
    {
        return $this->belongsTo(order::class);
    }

    public function item()
    {
        return $this->belongsTo(item::class);
    }
}
