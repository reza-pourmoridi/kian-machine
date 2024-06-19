<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarDriverRelation;
use App\Models\CarType;
use App\Models\Driver;
use App\Models\Project;
use App\Models\Company;
use App\Models\CarInfo;
use App\Models\DriverInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Car::leftJoin('company', 'cars.company_id', '=', 'company.id')
            ->leftJoin('project', 'cars.project_id', '=', 'project.id')
            ->select('cars.*', 'company.name as company_name', 'project.name as project_name');
        $car_type = CarType::all()->keyBy('id');
        $company = Company::all()->keyBy('id');
        $project = Project::all()->keyBy('id');
        if (isset($request->company_id) && !empty($request->company_id)) {
            $cars = $cars->where('company_id', $request->company_id);
        }
        if (isset($request->project_id) && !empty($request->project_id)) {
            $cars = $cars->where('project_id', $request->project_id);
        }
        if (isset($request->cat_id) && !empty($request->cat_id)) {
            $cars = $cars->where('cat_id', $request->cat_id);
        }
        if (isset($request->subcat_id) && !empty($request->subcat_id)) {
            $cars = $cars->where('subcat_id', $request->subcat_id);
        }
        if (isset($request->plate) && !empty($request->plate)) {
            $cars = $cars->where('licensePlateNumber', 'like', "%$request->plate%");
        }
        if (isset($request->code) && !empty($request->code)) {
            $cars = $cars->where('deviceCode', 'like', "%$request->code%");
        }
        if (isset($request->company) && !empty($request->company)) {
            $cars = $cars->where('company.name', 'like', "%$request->company%");
        }
        if (isset($request->project) && !empty($request->project)) {
            $cars = $cars->where('project.name', 'like', "%$request->project%");
        }

        $finalSql = $cars->toSql();
        $cars = $cars->get();
//        dd($finalSql, $plate);

        return view('dashboard/cars', compact('cars', 'car_type', 'company', 'project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $cars = Car::all();
        $car_type = CarType::where('parent_id', 0)->get();
        $car_sub_type = CarType::whereNot('parent_id', 0)->get();
        $company = Company::all()->keyBy('id');
        $project = Project::all()->keyBy('id');

        return view('dashboard.carsForm', compact('car_type', 'company', 'project', 'car_sub_type'));
    }


    public function edit($id)
    {
        $car_detail = Car::where('id', $id)->get();
        $car_info_detail = CarInfo::where('car_id', $id)->get();
        $car_type = CarType::where('parent_id', 0)->get();
        $car_sub_type = CarType::whereNot('parent_id', 0)->get();
        $company = Company::all()->keyBy('id');
        $project = Project::all()->keyBy('id');

        return view('dashboard.carsEdit', compact( 'car_detail','car_info_detail', 'car_type', 'company', 'project', 'car_sub_type'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $ids
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        $carInfo = CarInfo::where('car_id', $id)->firstOrFail();
        $car_type = CarType::all()->keyBy('id');
        $company = Company::all()->keyBy('id');
        $project = Project::all()->keyBy('id');
        $driver_id = CarDriverRelation::where('car_id', $id)->firstOrFail();
        $driver = Driver::where('id', $driver_id['driver_id'])->firstOrFail();
        $driver_info = DriverInfo::where('driver_id', $driver_id['driver_id'])->firstOrFail();

        return view('dashboard.carDetail', compact('car', 'carInfo', 'car_type', 'company', 'project', 'driver', 'driver_info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_all(Request $request)
    {
        $validatedData = $request->all();
        if ($validatedData) {
            DB::table('cars')->delete();
            DB::table('car_infos')->delete();
        }
        foreach ($validatedData as $item) {
            $car = new Car();
            $car->id = $item['id'];
            $car->company_id = $item['company_id'];
            $car->project_id = $item['project_id'];
            $car->cat_id = $item['cat_id'];
            $car->subcat_id = $item['subcat_id'];
            $car->deviceCode = $item['deviceCode'];
            $car->licensePlateNumber = $item['licensePlateNumber'];

            $car->documentUpload = $item['documentUpload'];
            $car->car_pic = $item['image'];

            $car->save();



            $carInfoData = $item;
            $carInfo = new CarInfo();
            $carInfo->car_id = $car->id;
            $carInfo->model = $carInfoData['model'];
            $carInfo->cylinderCount = $carInfoData['cylinderCount'];
            $carInfo->axleCount = $carInfoData['axleCount'];
            $carInfo->wheelCount = $carInfoData['wheelCount'];
            $carInfo->vin = $carInfoData['vin'];

            $carInfo->engineNumber = $carInfoData['engineNumber'];
            $carInfo->chassisNumber = $carInfoData['chassisNumber'];
            $carInfo->bodyNumber = $carInfoData['bodyNumber'];
            $carInfo->plateYear = $carInfoData['plateYear'];
            $carInfo->color = $carInfoData['color'];
            $carInfo->fuel = $carInfoData['fuel'];
            $carInfo->countryOfManufacture = $carInfoData['countryOfManufacture'];
            $carInfo->ownership = $carInfoData['ownership'];
            $carInfo->nationalId = $carInfoData['nationalId'];
            $carInfo->registrationNumber = $carInfoData['registrationNumber'];

            if ($carInfoData['purchaseDate'] == '0000-00-00'){
                $carInfoData['purchaseDate'] = null;
            }
            $carInfo->purchaseDate = $carInfoData['purchaseDate'];
            $carInfo->unitCode = $carInfoData['unitCode'];
            $carInfo->register_date = $carInfoData['reg_date'];
            $carInfo->tireBody = $carInfoData['tireBody'];
            $carInfo->carBody = $carInfoData['carBody'];
            $carInfo->shieldBody = $carInfoData['shieldBody'];
            $carInfo->glassBody = $carInfoData['glassBody'];
            $carInfo->motorBody = $carInfoData['motorBody'];
            $carInfo->ampBody = $carInfoData['ampBody'];
            $carInfo->lightingBody = $carInfoData['lightingBody'];
            $carInfo->seatBody = $carInfoData['seatBody'];
            $carInfo->voiceBody = $carInfoData['voiceBody'];
            $carInfo->coolerBody = $carInfoData['coolerBody'];
            $carInfo->codeBody = $carInfoData['codeBody'];

            $carInfo->save();

        }

        return response()->json(['message' => 'Car created successfully'],  201);
    }



    public function update(Request $request, $id)
    {
        $data = $request->all();

        // Find the existing car
        $car = Car::findOrFail($id);

        // Update the car with the new details
        $car->update([
            'company_id' => $data['company_id'] ?? $car->company_id,
            'project_id' => $data['project_id'] ?? $car->project_id,
            'cat_id' => $data['cat_id'] ?? $car->cat_id,
            'subcat_id' => $data['subcat_id'] ?? $car->subcat_id,
            'deviceCode' => $data['deviceCode'] ?? $car->deviceCode,
            'licensePlateNumber' => $data['licensePlateNumber'] ?? $car->licensePlateNumber,
            'documentUpload' => isset($data['documentUpload']) ? upload_image($data['documentUpload'], 'resized') : $car->documentUpload,
            'car_pic' => isset($data['image']) ? upload_image($data['image'], 'resized') : $car->car_pic,
        ]);

        // Check if purchaseDate needs to be set to null
        if ($data['purchaseDate'] ?? '0000-00-00' == '0000-00-00') {
            $data['purchaseDate'] = null;
        }

        // Find the existing car information
        $carInfo = CarInfo::where('car_id', $id)->firstOrFail();

        // Update the car information with the new details
        $carInfo->update([
            'model' => $data['model'] ?? $carInfo->model,
            'cylinderCount' => $data['cylinderCount'] ?? $carInfo->cylinderCount,
            'axleCount' => $data['axleCount'] ?? $carInfo->axleCount,
            'wheelCount' => $data['wheelCount'] ?? $carInfo->wheelCount,
            'vin' => $data['vin'] ?? $carInfo->vin,
            'engineNumber' => $data['engineNumber'] ?? $carInfo->engineNumber,
            'chassisNumber' => $data['chassisNumber'] ?? $carInfo->chassisNumber,
            'bodyNumber' => $data['bodyNumber'] ?? $carInfo->bodyNumber,
            'plateYear' => $data['plateYear'] ?? $carInfo->plateYear,
            'color' => $data['color'] ?? $carInfo->color,
            'fuel' => $data['fuel'] ?? $carInfo->fuel,
            'countryOfManufacture' => $data['countryOfManufacture'] ?? $carInfo->countryOfManufacture,
            'ownership' => $data['ownership'] ?? $carInfo->ownership,
            'nationalId' => $data['nationalId'] ?? $carInfo->nationalId,
            'registrationNumber' => $data['registrationNumber'] ?? $carInfo->registrationNumber,
            'purchaseDate' => $data['purchaseDate'] ?? $carInfo->purchaseDate,
            'unitCode' => $data['unitCode'] ?? $carInfo->unitCode,
            'register_date' => $data['reg_date'] ?? $carInfo->register_date,
            'tireBody' => $data['tireBody'] ?? $carInfo->tireBody,
            'carBody' => $data['carBody'] ?? $carInfo->carBody,
            'shieldBody' => $data['shieldBody'] ?? $carInfo->shieldBody,
            'glassBody' => $data['glassBody'] ?? $carInfo->glassBody,
            'motorBody' => $data['motorBody'] ?? $carInfo->motorBody,
            'ampBody' => $data['ampBody'] ?? $carInfo->ampBody,
            'lightingBody' => $data['lightingBody'] ?? $carInfo->lightingBody,
            'seatBody' => $data['seatBody'] ?? $carInfo->seatBody,
            'voiceBody' => $data['voiceBody'] ?? $carInfo->voiceBody,
            'coolerBody' => $data['coolerBody'] ?? $carInfo->coolerBody,
            'codeBody' => $data['codeBody'] ?? $carInfo->codeBody,
        ]);

        return redirect()->route('dashboard.carsEdit', ['id' => $car->id])->with('car_form_message', 'ماشین به‌روزرسانی شد.');
    }



    public function get_car_types($id)
    {
        $cars = Car::where('cat_id', $id)->get()->keyBy('id');
        $car_type = CarType::all()->keyBy('id');
        foreach ($cars as $key => $val) {
            $cars[$key]['cat_name'] = $car_type[$val['subcat_id']]['name'];
        }
        return response()->json($cars);
    }

    public function get_company_projects($id)
    {
        $projects = Project::where('company', $id)->get()->keyBy('id');
        return response()->json($projects);
    }
    // ... define methods for show, edit, update, and destroy as needed
}
