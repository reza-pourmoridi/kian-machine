<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all(); // Or filter as needed
        return view('drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'nationalId' => 'required|string|max:255',
            'mobilePhone' => 'required|string|max:255',
            'company_id' => 'nullable|integer|exists:companies,id', // Adjust validation based on relationships
            'project_id' => 'nullable|integer|exists:projects,id',
            'cat_id' => 'nullable|integer',
            'subcat_id' => 'nullable|integer',
            'driver_pic' => 'nullable|file',  // Adjust for image validation if needed
            'licenseType' => 'nullable|string|max:255',
            'licenseNumber' => 'nullable|string|max:255',
            'licenseValidityDate' => 'nullable|date',
            'documentPhoto' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $driver = Driver::create($request->all());

        return redirect()->route('drivers.index')->with('success', 'Driver created successfully!');
    }

    // ... define methods for show, edit, update, and destroy as needed
}
