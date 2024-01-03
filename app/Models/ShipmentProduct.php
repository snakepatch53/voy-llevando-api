<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipment_id',
        'product_id',
    ];

    public function shipment()
    {
        return $this->belongsTo(Shipment::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
