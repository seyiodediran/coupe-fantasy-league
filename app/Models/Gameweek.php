<?php

namespace App\Models;

use App\Models\User_Gameweek_Points;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gameweek extends Model
{

    public function userGameweekPoints()
    {
        return $this->hasMany(User_Gameweek_Points::class);
    }
    use HasFactory;
}
