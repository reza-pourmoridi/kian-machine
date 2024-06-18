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
        $cars = Car::all();
        $car_type = CarType::all()->keyBy('id');
        $company = Company::all()->keyBy('id');
        $project = Project::all()->keyBy('id');
        if ($request->has('company_id')) {
            $cars = $cars->where('company_id', $request->company_id);
        }
        if ($request->has('project_id')) {
            $cars = $cars->where('project_id', $request->project_id);
        }
        if ($request->has('cat_id')) {
            $cars = $cars->where('cat_id', $request->cat_id);
        }
        if ($request->has('subcat_id')) {
            $cars = $cars->where('subcat_id', $request->subcat_id);
        }
        return view('dashboard/cars', compact('cars', 'car_type', 'company', 'project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        $car_type = CarType::where('parent_id', 0)->get();
        $car_sub_type = CarType::whereNot('parent_id', 0)->get();
        $company = Company::all()->keyBy('id');
        $project = Project::all()->keyBy('id');

        return view('dashboard.carsForm', compact('cars', 'car_type', 'company', 'project', 'car_sub_type'));
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



    public function store(Request $request)
    {
        $data = $request->all();

        // Create the car with the basic details
        $car = Car::create([
            'company_id' => $data['company_id'] ?? null,
            'project_id' => $data['project_id'] ?? null,
            'cat_id' => $data['cat_id'] ?? null,
            'subcat_id' => $data['subcat_id'] ?? null,
            'deviceCode' => $data['deviceCode'] ?? null,
            'licensePlateNumber' => $data['licensePlateNumber'] ?? null,
            'documentUpload' => isset($data['documentUpload']) ? upload_image($data['documentUpload'], 'resized') : null,
            'car_pic' => isset($data['image']) ? upload_image($data['image'], 'resized') : null,
        ]);

        // Create the car information
        if ($data['purchaseDate'] ?? '0000-00-00' == '0000-00-00') {
            $data['purchaseDate'] = null;
        }

        CarInfo::create([
            'car_id' => $car->id,
            'model' => $data['model'] ?? null,
            'cylinderCount' => $data['cylinderCount'] ?? null,
            'axleCount' => $data['axleCount'] ?? null,
            'wheelCount' => $data['wheelCount'] ?? null,
            'vin' => $data['vin'] ?? null,
            'engineNumber' => $data['engineNumber'] ?? null,
            'chassisNumber' => $data['chassisNumber'] ?? null,
            'bodyNumber' => $data['bodyNumber'] ?? null,
            'plateYear' => $data['plateYear'] ?? null,
            'color' => $data['color'] ?? null,
            'fuel' => $data['fuel'] ?? null,
            'countryOfManufacture' => $data['countryOfManufacture'] ?? null,
            'ownership' => $data['ownership'] ?? null,
            'nationalId' => $data['nationalId'] ?? null,
            'registrationNumber' => $data['registrationNumber'] ?? null,
            'purchaseDate' => $data['purchaseDate'] ?? null,
            'unitCode' => $data['unitCode'] ?? null,
            'register_date' => $data['reg_date'] ?? null,
            'tireBody' => $data['tireBody'] ?? null,
            'carBody' => $data['carBody'] ?? null,
            'shieldBody' => $data['shieldBody'] ?? null,
            'glassBody' => $data['glassBody'] ?? null,
            'motorBody' => $data['motorBody'] ?? null,
            'ampBody' => $data['ampBody'] ?? null,
            'lightingBody' => $data['lightingBody'] ?? null,
            'seatBody' => $data['seatBody'] ?? null,
            'voiceBody' => $data['voiceBody'] ?? null,
            'coolerBody' => $data['coolerBody'] ?? null,
            'codeBody' => $data['codeBody'] ?? null,
        ]);

        return redirect()->route('dashboard.carsForm')->with('car_form_message', 'ماشین اضافه شد.');
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
