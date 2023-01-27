<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamLeader extends Model
{
    use HasFactory;
    protected $fillable=['name','surname'];
    public function team()
    {
        return $this->hasOne(Team::class);
    }
}
