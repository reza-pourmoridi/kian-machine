<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'project_id',
        'cat_id',
        'subcat_id',
        'deviceCode',
        'licensePlateNumber',

        'documentUpload',
        'car_pic',
    ];

    // Relationships (optional)
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
