<?php

namespace App\Http\Controllers\HomePage;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\jama_news;
use App\Models\Department;
use Illuminate\Http\Request;


class HomePageController extends Controller
{
    function index(Request $request){

        //$jamanews=jama_news::all();
        $jamanews=jama_news::orderBy('created_at', 'desc')->paginate(3);
        $doctors=doctor::where('doctors.status',1)->get();
        $departments=Department::all();
        return view("hospital.index",compact('doctors','jamanews','departments'));
}

public function getDoctorList(Request $request){

    //$request->id here is the id of our chosen option id
    //$data=doctor::where('doctors.department_id',$request->id)->get();
    $data=doctor::select('fullname','id')->where('department_id',$request->id)->get();
    return response()->json($data);//then sent this data to ajax success
}


}
