<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VocalUmamusume extends Model
{
    protected $table = 'vocal_umamusume_table';

    public $timestamps = false;
    
    public function Live(){
        return $this->hasOne(Live::class);   
    }

    public function Umamusume(){
        return $this->hasOne(Umamusume::class);   
    }
}
