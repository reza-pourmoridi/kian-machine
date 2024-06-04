<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'driver_ids',
        'company_id',
        'project_id',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    // Mutator to convert driver_ids JSON to an array before saving
    public function setDriverIdsAttribute($value)
    {
        $this->attributes['driver_ids'] = json_encode($value);
    }

    // Accessor to convert driver_ids JSON to an array when retrieved
    public function getDriverIdsAttribute($value)
    {
        return json_decode($value, true);
    }

    // Define relationships with company and project (optional)
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
