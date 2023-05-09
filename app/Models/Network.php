<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offer;

class Network extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Offer() {
        
        return $this->hasOne(Offer::class);
    }

    static public function get_apikey($network_id){
        return Network::WhereRaw('id = ?', [$network_id])->first('apikey')->apikey;
    }
}
