<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\From;
use App\Models\Vertical;
use App\Models\Location;
use App\Models\Creative;
use App\Models\Network;
use App\Models\Team;
use App\Models\Link;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subjects(){

        return $this->hasMany(Subject::class);
    }

    public function froms(){

        return $this->hasMany(From::class);
    }

    public function locations(){

        return $this->hasMany(Location::class);
    }

    public function links(){

        return $this->hasMany(Link::class);
    }

    public function creatives(){

        return $this->hasMany(Creative::class);
    }

    public function teams(){

        return $this->hasMany(Team::class);
    }

    public function vertical(){

        return $this->belongsTo(Vertical::class);
    }

    public function network(){

        return $this->belongsTo(Network::class);
    }

}
