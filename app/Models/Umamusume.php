<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umamusume extends Model
{

    protected $primaryKey = 'umamusume_id';

    protected $table = 'umamusume_table';

    public $timestamps = false;

    public function VocalUmamusume(){
        return $this->belongTo(VocalUmamusume::class);   
    }

    public function ScenarioRace(){
        return $this->belongTo(ScenarioRace::class);   
    }

    public function RegistUmamusume(){
        return $this->belongTo(RegistUmamusume::class);   
    }

    public function UmamusumeActer(){
        return $this->hasOne(UmamusumeActer::class);   
    }
    
}
