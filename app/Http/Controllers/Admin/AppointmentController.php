<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\specialist;
use App\Models\departments;
use App\Models\city;
use App\Models\day;
use App\Models\appointment;
use App\Http\Requests\Doctor\CreateDRequest;
use App\Http\Requests\Doctor\EditDRequest;
use Spatie\Permission\Models\Role;
use Session;

class AppointmentController extends Controller
{

    public function index(Request $request)
    {
        $item=appointment::all();
        return view('admin.doctor.appointment.index')->withItems($item);
      
    }
    public function create()
    {

        $doctors=Doctor::all();
        $days=day::all();
        return view("admin.doctor.appointment.create",compact('doctors','days'));
    }

    public function store(Request $request)
    {
        $requestData=$request->all();
    
    
        $appoiemnts= appointment::create($requestData);   
         
       
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        return redirect(route("doctor.create"));
    }

}
