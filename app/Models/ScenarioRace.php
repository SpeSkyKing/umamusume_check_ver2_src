<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScenarioRace extends Model
{

    protected $table = 'scenario_race_table';

    public $timestamps = false;
    
    public function Umamusume(){
        return $this->hasOne(Umamusume::class);   
    }
}
