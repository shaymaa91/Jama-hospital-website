<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Specialize;
use App\Models\department;
use App\Models\City;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\doctor\CreatDoctorRequest;
use App\Http\Requests\doctor\EditDoctorRequest;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
            $q = $request->q;
            $department = $request->department;
            $status = $request->status;
    
            $query = doctor::whereRaw('true');
            
            if($status!=''){
                $query->where('status',$status);
            }
    
            if($department){
                $query->where('department_id',$department);
            }
            
            if($q){
                $query->whereRaw('(title like ? or slug like ?)',["%$q%","%$q%"]);
            }
    
            
            $doctors = $query->paginate(7)
            ->appends([
                'q'     =>$q,
                'department'=>$department,
                'status'=>$status
            ]);
    
            $departments = department::all();
            return view("admin.doctor.index",compact('doctors','departments')); 
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = doctor::all();
        $Specializes = Specialize::all();
        $departments = department::all();
        $cities = city::all();
        return view("admin.doctor.create",compact('doctors','Specializes','departments','cities'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatDoctorRequest $request)
    {
        $fileName = $request->image->store("public/assets/img"); 
        $imageName = $request->image->hashName();
        
        $requestData = $request->all();
        $requestData['image'] = $imageName;        
        $requestData['password'] = bcrypt($requestData['password']);
        $userData=$requestData;
        $userData['name']=$requestData['fullname'];

        //insert on users table
        $user=user::create($userData);
        $lastUserId=$user->id;
        $user->assignRole('doctor');

        //insert on doctor table           
        $doctorData = $requestData;
        $doctorData['user_id'] = $lastUserId;
        doctor::create($doctorData);
        
        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("doctors.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = doctor::find($id);
        if(!$doctor){
            session()->flash("msg","w: العنوان غير صحيح");
            return redirect(route("doctors.index"));
        }
        return view("admin.doctor.show",compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = doctor::find($id);
        $specializes = specialize::all();
        $departments = department::all();
        $cities = city::all();
        if(!$doctor){
            session()->flash("msg","e:العنوان غير صحيح");
            return redirect(route("doctors.index"));
        }
        
        
        return view("admin.doctor.edit",compact('doctor','specializes','departments','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctorDB = doctor::find($id);
        if($request['image']){            
            $requestData = $request->all();
            $fileName = $request->image->store("public/assets/img");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;            
            $doctorDB->update($requestData);
        }
        else{
            
            doctor::where('id', $id)->update(array('fullname' => $request['fullname'],
                                                     'degree'=> $request['degree'],
                                                     'date_of_birth'=> $request['date_of_birth'],
                                                     'specialize_id'=> $request['specialize_id'],
                                                     'department_id'=> $request['department_id'],
                                                     'city_id'=> $request['city_id'],
                                                     'address'=> $request['address'],
                                                     'mobile'=> $request['mobile'],
                                                     'salary'=> $request['salary'],
                                                     'short_bio'=> $request['short_bio'],
                                                     'status'=> $request['status']));
        }
        
        
        session()->flash("msg","s:تم تعديل المنتج بنجاح");
        return redirect(route("doctors.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctordel=doctor::find($id);
        $user_id=$doctordel->user->id;
        DB::table("users")->where("id",$user_id)->delete();
        DB::table("doctors")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف الطبيب بنجاح");
        return redirect(route("doctors.index"));
    }
}