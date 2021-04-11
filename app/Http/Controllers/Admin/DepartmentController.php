<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Department\CreateRequest;
use App\Http\Requests\Department\EditRequest;
use App\Models\Department;
use Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q=$request->q;

         $active=$request->active;
         $items=Department::whereRaw("true");

         if($active)
         {
             $items->where("active",$active);
         }
         if($active=="0")
         {
             
             $items->where("active",$active);
         }
         if($q)
         {
             $items->whereRaw('( title like ? )',["%$q%"]);
         }
         
        
         $items=$items->paginate(10)
         ->appends([
             'q'=>$q,
             'active'=>$active
         ]);
 

        return view("admin.Department.index")->with("items",$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.Department.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $data=$request->all();        
        Department::create($data);
        Session::flash("msg","تم اضافة الإختصاص بنجاح");
    
        return redirect (route("Department.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Department::find($id);
        if(!$item)
        {
            session()->flash("msg","Invalid ID");
            return redirect(route("Department.index"));
        }

        return view("admin.Department.show",compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= Department::find($id);
        if(!$item)
        {
            session()->flash("msg","Invalid ID");
            return redirect(route("Specialize.index"));

        }
        return view("admin.Department.edit",compact('item'));
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
        $item=Department::find($id);
        $data=$request->all();
        if($request['active']==1){
        $data['active']=1;
        }
        else{
        $data['active']=0;
        }
        $item->update($data);  
        Session::flash("msg"," تم التعديل بنجاح");
  
        return redirect (route("Department.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item= Department::find($id);
        $item->delete();
        Session::flash("msg","تم حذف التصنيف بنجاح");
        return redirect (route("Department.index"));
    }
}