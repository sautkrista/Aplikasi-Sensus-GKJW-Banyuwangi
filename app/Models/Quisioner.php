<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quisioner extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function sensus()
    {
        return $this->belongsTo(Sensus::class);
    }
}
