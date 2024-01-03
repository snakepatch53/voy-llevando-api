<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_name',
        'carrier_name',
        'store',
        'tracking_code',
        'bill_file',
        'description',
        'status',
        'user_id',
        'locker_id',
    ];

    static $_STATUS = [
        1 => 'Revision',
        2 => 'Pagado',
        3 => 'Enviado',
        4 => 'Entregado',
        5 => 'Cancelado'
    ];

    protected $appends = ['status_name'];

    public function getStatusNameAttribute()
    {
        return self::$_STATUS[$this->status];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function locker()
    {
        return $this->belongsTo(Locker::class);
    }

    public function trackings()
    {
        return $this->hasMany(Tracking::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
