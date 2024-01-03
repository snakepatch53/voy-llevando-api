<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'place',
        'description',
        'alert_id',
    ];

    public function alert()
    {
        return $this->belongsTo(Alert::class);
    }
}
