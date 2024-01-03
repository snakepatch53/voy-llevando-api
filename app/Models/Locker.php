<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'popup',
        'img',
    ];

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }
}
