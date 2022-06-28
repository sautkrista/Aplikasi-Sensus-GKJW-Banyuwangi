<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function krw()
    {
        return $this->belongsTo(Krw::class);
    }

    public function sensus()
    {
        return $this->hasMany(Sensus::class);
    }
}
