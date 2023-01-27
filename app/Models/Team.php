<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable=['teamName'];
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function leader()
    {
        return $this->belongsTo(TeamLeader::class);
    }
}
