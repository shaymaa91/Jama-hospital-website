<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\specialist;
use App\Models\departments;
use App\Models\city;
use App\Http\Requests\Doctor\CreateDRequest;
use App\Http\Requests\Doctor\EditDRequest;
use Spatie\Permission\Models\Role;
use Session;

class DoctorController extends Controller
{

    public function index(Request $request)
    {
        //encrypt + decrypt
        //encrypt('1');
        //decrypt('nkjnbkj nbzcjm rsad;')
        $items=Doctor::all();
        return view('admin.doctor.index')->withItems($items);
      
    }

    public function create()
    {

        $specialists=specialist::all();
        $departments=departments::all();
        $cities=city::all();
        return view("admin.doctor.create",compact('specialists','departments','cities'));
    }

    public function store(CreateDRequest $request)
    {
        $requestData=$request->all();
if($request->image){
    $fileName=$request->image->store('public/images');
    $imageName=$request->image->hashName();
    $requestData['image']=$imageName;

    }
    
        $doctor= Doctor::create($requestData);   
         
       
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        return redirect(route("doctor.create"));
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $item = Doctor::find($id);
        $specialists=specialist::all();
        $departments=departments::all();
        $cities=city::all();
       
        if(!$item){
            session()->flash("msg","e:عنوان المستخدم غير صحيح");
            return redirect(route("doctor.index"));
        }
        return view("admin.doctor.edit",compact('item','specialists','departments','cities'));
    }

    public function update(EditDRequest $request, $id)
    {
        $doctor = Doctor::find($id);
        $requestData = $request->all();
      
        $doctor->update($requestData);

        session()->flash("msg","s:تم تعديل بيانات المستخدم بنجاح");
        return redirect(route("doctor.index"));
    }


    public function destroy($id)
    {
        $itemDB = Doctor
        ::find($id);
        $itemDB->delete();
        session()->flash("msg","w:تم حذف المستخدم بنجاح");
        return redirect(route("doctor.index"));
    }
}
