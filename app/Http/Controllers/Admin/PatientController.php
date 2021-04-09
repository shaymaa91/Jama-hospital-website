<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Specialize;
use App\Models\department;
use App\Models\City;
use App\Models\patient;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\patient\CreatPatientRequest;
use App\Http\Requests\patient\EditPatientRequest;
use Illuminate\Support\Str;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        $gender = $request->gender;

        $query = patient::whereRaw('true');

        if($gender!=''){
            $query->where('gender',$gender);
        }


        if($q){
            $query->whereRaw('(fullname like ?)',["%$q%"]);
        }


        $patients = $query->paginate(7)
        ->appends([
            'q'     =>$q,
            'gender'=>$gender
        ]);

        return view("admin.patient.index",compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = patient::all();
        $cities = city::all();
        return view("admin.patient.create",compact('patients','cities'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatPatientRequest $request)
    {
        $fileName = $request->image->store("public/assets/img/patients");
        $imageName = $request->image->hashName();

        $requestData = $request->all();
        $requestData['image'] = $imageName;
        $requestData['password'] = bcrypt($requestData['password']);
        $userData=$requestData;
        $userData['name']=$requestData['fullname'];
        $userData['status']=1;

        //insert on users table
        $user=user::create($userData);
        $lastUserId=$user->id;
        $user->assignRole('patient');

        //insert on patient table
        $patientData = $requestData;
        $patientData['user_id'] = $lastUserId;
        patient::create($patientData);

        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("patients.index"));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = patient::find($id);
        $cities = city::all();
        if(!$patient){
            session()->flash("msg","e:العنوان غير صحيح");
            return redirect(route("patients.index"));
        }


        return view("admin.patient.edit",compact('patient','cities'));
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
        $patientDB = patient::find($id);
        if($request['image']){
            $requestData = $request->all();
            $fileName = $request->image->store("public/assets/img/patients/");
            $imageName = $request->image->hashName();
            $requestData['image'] = $imageName;
            $patientDB->update($requestData);
        }
        else{

            patient::where('id', $id)->update(array('fullname' => $request['fullname'],
                                                     'date_of_birth'=> $request['date_of_birth'],
                                                     'blood_group'=> $request['blood_group'],
                                                     'city_id'=> $request['city_id'],
                                                     'address'=> $request['address'],
                                                     'mobile'=> $request['mobile'],
                                                     'gender'=> $request['gender']));
        }


        session()->flash("msg","s:تم تعديل المنتج بنجاح");
        return redirect(route("patients.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patientdel=patient::find($id);
        $user_id=$patientdel->user->id;
        DB::table("users")->where("id",$user_id)->delete();
        DB::table("patients")->where("id",$id)->delete();
        session()->flash("msg","w:تم حذف المريض بنجاح");
        return redirect(route("patients.index"));
    }
}
