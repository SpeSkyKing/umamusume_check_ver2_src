<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{

    protected $primaryKey = 'race_id';

    protected $table = 'race_table';

    public $timestamps = false;

    public function RegistUmamusume(){
        return $this->belongTo(RegistUmamusume::class);   
    }

    public function ScenarioRace(){
        return $this->belongTo(ScenarioRace::class);   
    }
}
