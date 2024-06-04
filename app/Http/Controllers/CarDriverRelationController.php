<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarDriverRelationController extends Controller
{
    /**
     * Assign a driver to a car.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Car  $car
     * @return \Illuminate\Http\Response
     */
    public function assignDriver(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'driver_id' => 'required|integer|exists:drivers,id', // Ensure driver exists
        ]);

        $car->drivers()->attach($validatedData['driver_id']);

        return back()->with('success', 'Driver assigned to car successfully!');
    }

    /**
     * Remove a driver from a car.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Car  $car
     * @return \Illuminate\Http\Response
     */
    public function removeDriver(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'driver_id' => 'required|integer|exists:drivers,id', // Ensure driver exists
        ]);

        $car->drivers()->detach($validatedData['driver_id']);

        return back()->with('success', 'Driver removed from car successfully!');
    }
}
