<?php

namespace App\Http\Controllers;

use App\Models\CarInfo;
use App\Models\Company;
use App\Models\Driver;
use App\Models\DriverInfo;
use App\Models\CarDriverRelation;
use App\Models\CarType;
use App\Models\Car;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class DriverController extends Controller
{
    private function getDriversData($request)
    {
        $drivers = Driver::leftJoin('company', 'drivers.company_id', '=', 'company.id')
            ->leftJoin('project', 'drivers.project_id', '=', 'project.id')
            ->select('drivers.*', 'company.name as company_name', 'project.name as project_name');;

        $car_type = CarType::all()->keyBy('id');
        $CarDriverRelation = CarDriverRelation::all()->keyBy('driver_id');
        $cars = Car::all()->keyBy('id');
        $company = Company::all()->keyBy('id');
        $project = Project::all()->keyBy('id');

        if (isset($request->company_id) && !empty($request->company_id)) {
            $drivers = $drivers->where('company_id', $request->company_id);
        }

        if (isset($request->project_id) && !empty($request->project_id)) {
            $drivers = $drivers->where('project_id', $request->project_id);
        }

        if (isset($request->cat_id) && !empty($request->cat_id)) {
            $drivers = $drivers->where('cat_id', $request->cat_id);
        }

        if (isset($request->subcat_id) && !empty($request->subcat_id)) {
            $drivers = $drivers->where('subcat_id', $request->subcat_id);
        }

        if (isset($request->nationalId) && !empty($request->nationalId)) {
            $drivers = $drivers->where('nationalId', 'like', "%$request->nationalId%");
        }
        if (isset($request->phoneNumber) && !empty($request->phoneNumber)) {
            $drivers = $drivers->where('mobilePhone', 'like', "%$request->phoneNumber%");
        }
        if (isset($request->company) && !empty($request->company)) {
            $drivers = $drivers->where('company.name', 'like', "%$request->company%");
        }
        if (isset($request->project) && !empty($request->project)) {
            $drivers = $drivers->where('project.name', 'like', "%$request->project%");
        }
        $drivers = $drivers->get();


        return compact('drivers', 'car_type', 'company', 'project', 'cars', 'CarDriverRelation');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $this->getDriversData($request);
        return view('dashboard/drivers', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all()->keyBy('id');
        $car_categories = CarType::where('parent_id', 0)->get();
        $car_sub_categories = CarType::where('parent_id', '!=', 0)->get()->keyBy('id');
        $cars_info = CarInfo::all()->keyBy('car_id');

        return view('dashboard.driversForm', compact('cars', 'cars_info', 'car_categories', 'car_sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function handel_jalalian_date($date){
//        if ($date && $date !== '------') {
//            try {
//                $date = Jalalian::fromFormat('Y/m/d', $date)->toCarbon()->format('Y-m-d');
//            } catch (\Exception $e) {
//                $date = null; // Handle invalid date format
//            }
//        } else {
//            $date = null; // Handle null or invalid dates
//        }
        return $date;
    }

    public function store_all(Request $request)
    {
        $validatedData = $request->all();
        if ($validatedData) {
//            DB::table('drivers')->delete();
//            DB::table('driver_infos')->delete();
        }
        foreach ($validatedData as $item) {
            $driver = new Driver();
            $driver->id = $item['id'];
            $driver->firstName = $item['firstName'];
            $driver->lastName = $item['lastName'];
            $driver->nationalId = $item['nationalId'];
            $driver->mobilePhone = $item['mobilePhone'];
            $driver->company_id = $item['company_id'];
            $driver->project_id = $item['project_id'];
            $driver->cat_id = $item['cat_id'];
            $driver->subcat_id = $item['subcat_id'];
            $driver->driver_pic = $item['driverPhoto'];
            $driver->licenseType = $item['licenseType'];
            $driver->licenseNumber = $item['licenseNumber'];
            $driver->licenseValidityDate = $this->handel_jalalian_date($item['licenseValidityDate']);
            $driver->documentPhoto = $item['documentPhoto'];

            $driver->save();



            $driverInfoData = $item;
            $driverInfo = new driverInfo();
            $driverInfo->driver_id = $driver->id;
            $driverInfo->fatherName = $driverInfoData['fatherName'];
            $driverInfo->birthdate = $this->handel_jalalian_date($driverInfoData['birthdate']);
            $driverInfo->maritalStatus = $driverInfoData['maritalStatus'];
            $driverInfo->province = $driverInfoData['province'];
            $driverInfo->gender = $driverInfoData['gender'];
            $driverInfo->city = $driverInfoData['city'];
            $driverInfo->section = $driverInfoData['section'];
            $driverInfo->education = $driverInfoData['education'];
            $driverInfo->fieldOfStudy = $driverInfoData['fieldOfStudy'];
            $driverInfo->postalCode = $driverInfoData['postalCode'];
            $driverInfo->homePhone = $driverInfoData['homePhone'];
            $driverInfo->address = $driverInfoData['address'];
            $driverInfo->militaryType = $driverInfoData['militaryServiceType'];
            $driverInfo->militaryStartDate = $this->handel_jalalian_date($item['militaryServiceStartDate']);
            $driverInfo->militaryEndDate = $this->handel_jalalian_date($driverInfoData['militaryServiceEndDate']);
            $driverInfo->militaryCardNumber = $driverInfoData['militaryServiceCardNumber'];

            $driverInfo->employmentDate = $this->handel_jalalian_date($driverInfoData['employmentDate']);
            $driverInfo->serviceYears = $driverInfoData['serviceYears'];
            $driverInfo->smartCard = $driverInfoData['smartCard'];
            $driverInfo->healthCard = $driverInfoData['healthCard'];
            $driverInfo->busBooklet = $driverInfoData['busBooklet'];
            $driverInfo->status = $driverInfoData['status'];


            $driverInfo->save();

        }

        return response()->json(['message' => 'driver created successfully'],  201);
    }


    public function store_car_driver(Request $request)
    {
        $validatedData = $request->all();
        if ($validatedData) {
            DB::table('car_driver_relation')->delete();
        }
        foreach ($validatedData as $item) {
            try {
                $driver = new CarDriverRelation();
                $driver->car_id = $item['car_id'];
                $driver->driver_id = $item['id'];
                $driver->save();
            } catch (\Exception $e) {
                // Log the error or store it in an array for later use
                $errors[] = [
                    'car_id' => $item['car_id'],
                    'driver_id' => $item['id'],
                    'error' => $e->getMessage()
                ];
            }
        }

        return response()->json(['message' => 'car, driver relation created successfully'],  201);
    }

    public function store(Request $request)
    {
        $item = $request->all();

        $driver = new Driver();
        $driver->firstName = $item['firstName'];
        $driver->lastName = $item['lastName'];
        $driver->nationalId = $item['nationalId'];
        $driver->mobilePhone = $item['mobilePhone'];
        $driver->licenseType = $item['licenseType'];
        $driver->licenseNumber = $item['licenseNumber'];
        $driver->licenseValidityDate = $this->handel_jalalian_date($item['licenseValidityDate']);
        if (isset($item['driverPhoto'])) {
            $driver->driver_pic = upload_image($item['driverPhoto'], 'resized');
        }
        if (isset($item['documentPhoto'])) {
            $driver->documentPhoto = upload_image($item['documentPhoto'], 'resized');
        }
        $driver->company_id = $item['company_id'];
        $driver->project_id = $item['project_id'];
        $driver->cat_id = $item['cat_id'];
        $driver->subcat_id = $item['subcat_id'];


        $driver->save();
        $driverInfoData = $item;
        $driverInfo = new driverInfo();
        $driverInfo->driver_id = $driver->id;
        $driverInfo->fatherName = $driverInfoData['fatherName'];
        $driverInfo->birthdate = $this->handel_jalalian_date($driverInfoData['birthdate']);
        $driverInfo->maritalStatus = $driverInfoData['maritalStatus'];
        $driverInfo->province = $driverInfoData['province'];
        $driverInfo->gender = $driverInfoData['gender'];
        $driverInfo->city = $driverInfoData['city'];
        $driverInfo->section = $driverInfoData['section'];
        $driverInfo->education = $driverInfoData['education'];
        $driverInfo->fieldOfStudy = $driverInfoData['fieldOfStudy'];
//        $driverInfo->postalCode = $driverInfoData['postalCode'];
        $driverInfo->homePhone = $driverInfoData['homePhone'];
        $driverInfo->address = $driverInfoData['address'];
        $driverInfo->militaryType = $driverInfoData['militaryServiceType'];
//        $driverInfo->militaryStartDate = $this->handel_jalalian_date($item['militaryServiceStartDate']);
//        $driverInfo->militaryEndDate = $this->handel_jalalian_date($driverInfoData['militaryServiceEndDate']);
//        $driverInfo->militaryCardNumber = $driverInfoData['militaryServiceCardNumber'];
        $driverInfo->employmentDate = $this->handel_jalalian_date($driverInfoData['employmentDate']);
//        $driverInfo->serviceYears = $driverInfoData['serviceYears'];
//        $driverInfo->smartCard = $driverInfoData['smartCard'];
//        $driverInfo->healthCard = $driverInfoData['healthCard'];
//        $driverInfo->busBooklet = $driverInfoData['busBooklet'];
        $driverInfo->status = 0;
        $result = $driverInfo->save();

        $car_driver_relaion = new CarDriverRelation();
        $car_driver_relaion->car_id = $item['car_id'];
        $car_driver_relaion->driver_id = $driver->id;
        $relation_result = $car_driver_relaion->save();
        if ($result and $relation_result) {
            $data = $this->getDriversData($request);
            return view('dashboard/drivers', $data);
        }
    }

    // ... define methods for show, edit, update, and destroy as needed
}
