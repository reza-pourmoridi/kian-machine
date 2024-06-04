<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'fatherName',
        'birthdate',
        'maritalStatus',
        'province',
        'gender',
        'city',
        'section',
        'education',
        'fieldOfStudy',
        'postalCode',
        'homePhone',
        'address',
        'militaryType',
        'militaryStartDate',
        'militaryEndDate',
        'militaryCardNumber',
        'employmentDate',
        'serviceYears',
        'smartCard',
        'healthCard',
        'busBooklet',
        'update_date',
        'status',
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }}
