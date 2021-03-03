<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use DB;



class dashboardController extends Controller
{

    public function index(Request $request)
    {
        $count=DB::table('doctors')->where('id','>=',12)->get()->count();
        $counts=DB::table('users')->where('id','>=',2)->get()->count();
        return view('Admin.dashboard.index',compact('count','counts'));

      
    } }