<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krw extends Model
{
    use HasFactory;

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
