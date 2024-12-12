<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmamusumeActer extends Model
{

    protected $primaryKey = 'acter_id';

    protected $table = 'umamusume_acter_table';

    public $timestamps = false;
    
    public function Umamusume(){
        return $this->hasOne(Umamusume::class);   
    }
}
