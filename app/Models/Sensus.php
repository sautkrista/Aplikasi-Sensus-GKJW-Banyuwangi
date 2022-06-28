<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensus extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function warga()
    {
        return $this->belongsTo(Quisioner::class);
    }
    public function quisioner()
    {
        return $this->hasOne(Quisioner::class);
    }
}
