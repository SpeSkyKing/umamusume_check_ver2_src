<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonal extends Model
{

    protected $primaryKey = 'user_id';

    protected $table = 'user_table';

    public $timestamps = false;
    
    public function RegistUmamusume(){
        return $this->belongTo(RegistUmamusume::class);   
    }

    public function UserHistory(){
        return $this->hasOne(UserHistory::class);   
    }

    public function UserSecurity(){
        return $this->hasOne(UserSecurity::class);   
    }
}
