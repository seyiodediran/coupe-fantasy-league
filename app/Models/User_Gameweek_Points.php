<?php

namespace App\Models;

use App\Models\User;
use App\Models\Gameweek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User_Gameweek_Points extends Model
{

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function gameweek()
    {
        return $this->hasOne(Gameweek::class);
    }
    
    use HasFactory;
}
