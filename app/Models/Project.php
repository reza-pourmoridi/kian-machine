<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';

    protected $fillable = [
        'parent',
        'name',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class, 'project_id');
    }

    public function drivers()
    {
        return $this->hasMany(Driver::class, 'company_id');
    }
}
