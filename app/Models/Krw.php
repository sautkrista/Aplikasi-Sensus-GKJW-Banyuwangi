<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krw extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function warga()
    {
        return $this->hasmany(Warga::class);
    }
}
