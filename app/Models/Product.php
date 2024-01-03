<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'weight',
        'quantity',
        'subcategory_id',
        'alert_id',
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function alert()
    {
        return $this->belongsTo(Alert::class);
    }

    public function shipmentProducts()
    {
        return $this->hasMany(ShipmentProduct::class);
    }
}
