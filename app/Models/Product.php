<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'image',
        'price',
        'quantity',
        'decription',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details')
            ->withPivot('quantity', 'notes')
            ->withTimestamps();
    }

}
