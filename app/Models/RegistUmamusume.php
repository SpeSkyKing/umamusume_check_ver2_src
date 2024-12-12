<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistUmamusume extends Model
{

    protected $table = 'regist_umamusume_table';

    public $timestamps = false;
    
    public function Umamusume(){
        return $this->hasOne(Umamusume::class);   
    }

    public function User(){
        return $this->hasOne(UserPersonal::class);   
    }

    public function RegistUmamusumeRace(){
        return RegistUmamusumeRace::where('umamusume_id',$this->umamusume_id)
        ->where('race_id',$this->race_id)->first();
    }
}
