<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';

    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'notes',
    ];
}
