<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offer;

class From extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Offer() {
        
        return $this->belongsTo(Offer::class);
    }
}
