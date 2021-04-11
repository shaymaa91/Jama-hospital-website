<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\medicines;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\medicines\CreateRequest;
use App\Http\Requests\medicines\EditRequest;
use Illuminate\Support\Str;
class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
       
$status=$request->status;
$items  = medicines::whereRaw('true');

       if($status)
         {
            $items->where("status",$status);
         }
         if($status=="0")
         {
             
            $items->where("status",$status);
         }
         if($q)
         {
            $items->whereRaw('(	midicine_name like ? )',["%$q%"]);
         }
         
        
         $items =$items->paginate(10)
         ->appends([
             'q'=>$q,
             'status'=>$status
         ]);
 

        return view("admin.medicines.index",compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("admin.medicines.create");

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
       /* $fileName = $request->image->store("public/assets/img/pharmacy/");
        $imageName = $request->image->hashName();
        $requestData['image'] = $imageName;*/
        $requestData = $request->all();
       
      

           
        medicines::create ($requestData);

        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("medicines.index"));
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
        $item= medicines::find($id);
        if(!$item)
        {
            session()->flash("msg","Invalid ID");
            return redirect(route("medicines.index"));

        }
        return view("admin.medicines.edit",compact('item'));
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
        $item=medicines::find($id);
        $data=$request->all();
        if($request['active']==1){
        $data['active']=1;
        }
        else{
        $data['active']=0;
        }
        $item->update($data);  
        Session::flash("msg"," تم التعديل بنجاح");
  
        return redirect (route("medicines.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= medicines::find($id);
        $item->delete();
        Session::flash("msg","تم حذف التصنيف بنجاح");
        return redirect (route("medicines.index"));
    }
}