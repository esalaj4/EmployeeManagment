<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=['projectName','description'];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function projectManagers()
    {
        return $this->belongsTo(ProjectManager::class, 'pm_id', 'id');
    }
}
