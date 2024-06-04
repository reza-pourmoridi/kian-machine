<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'nationalId',
        'mobilePhone',
        'company_id',
        'project_id',
        'cat_id',
        'subcat_id',
        'driver_pic',
        'licenseType',
        'licenseNumber',
        'licenseValidityDate',
        'documentPhoto',
    ];

    // Define relationships (optional)
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
