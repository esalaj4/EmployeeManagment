<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey='id';
    protected $fillable=['name','surname','days_off'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

}
