<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Live extends Model
{

    protected $primaryKey = 'live_id';

    protected $table = 'live_table';

    public $timestamps = false;
 
    public function VocalUmamusume(){
        return $this->belongTo(VocalUmamusume::class);   
    }
}
