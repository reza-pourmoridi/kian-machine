<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    use HasFactory;

    // Optional: Enable soft deletes if needed
    use SoftDeletes;

    protected $fillable = [
        'parent_id',
        'name',
    ];

    // Define a relationship with itself (optional)
    public function parent()
    {
        return $this->belongsTo(CarType::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(CarType::class, 'parent_id', 'id');
    }
}
