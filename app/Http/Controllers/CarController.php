<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all(); // Or filter as needed
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_id' => 'required|integer',
            'project_id' => 'required|integer',
            'cat_id' => 'required|integer',
            'subcat_id' => 'required|integer',
            'deviceCode' => 'nullable|string',
            'licensePlateNumber' => 'nullable|string',
            // ... other car validation rules
            'documentUpload' => 'nullable|file',
            'car_pic' => 'nullable|file',
        ]);

        $car = Car::create($validatedData);

        return redirect()->route('cars.index')->with('success', 'Car created successfully!');
    }

    // ... define methods for show, edit, update, and destroy as needed
}
