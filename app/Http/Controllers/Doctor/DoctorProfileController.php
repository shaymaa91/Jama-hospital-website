<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DoctorProfileController extends Controller
{
    public function index()
    {
        return view('doctor-profile.index');
    }
}
